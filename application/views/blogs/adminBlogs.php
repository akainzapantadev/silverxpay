<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/adminblogs.js"></script>
    <script src="assets/js/md5.js"></script>
    <link rel="stylesheet" href="assets/css/blogs.css">
    <link rel="icon" href="assets/images/icon-text.png" type="image/gif">
    <title class="main-color">Admin Blogs</title>
  </head>
  <style>
    .disabledstackedbtn{
      background-color:green!important;
    }
  </style>
  <body class="m-d-none">
  <div class="container py-5">
    <div class="my-5"><span class="display-1">Silverxpay Blogs admin</span></div>
    <div class="my-2"><span class="h2">Blogs <span id="countBlog_id"></span></span></div>
    <div class="input-group mb-3">
      <input id="title_input" type="text" class="form-control" placeholder="Title" >
    </div>
    <div class="input-group mb-3">
      <input id="routeLink_input" type="text" class="form-control" placeholder="Route Link" >
    </div>
    <div class="input-group mb-3">
      <input id="author_input" type="text" class="form-control" placeholder="Author" >
    </div>
    <div class="input-group">
      <span class="input-group-text text-muted"> Short Description</span>
      <textarea id="sdesc_input" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-2 mt-4">
      <span class="h2">Content</span>
      <button class="btn btn-outline-transparent" onclick="window.open('https://wordtohtml.net/site/index', '_blank')">Editor</button>
    </div>
    
    <div class="my-2"></div>
    <div>
      <div id="content_container" class="my-2">
      <div class="input-group">
        <span class="input-group-text text-muted"> Contents</span>
        <textarea id="contents_input" class="form-control" aria-label="With textarea" placeholder="paste contents here"></textarea>
      </div>
      </div>
      <div class="mb-2 mt-4">
        <span class="h2">Content</span>
        <button class="btn btn-outline-transparent" onclick="window.open('https://tinypng.com/', '_blank')">Tiny PNG</button>
      </div>
    <div id="upload_view"></div>
      
    <div class="mb-2 mt-4"><span class="h2">Seo</span></div>

    <div class="input-group mb-2">
      <span class="input-group-text text-muted">Description</span>
      <textarea id="desc_input" class="form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="input-group">
      <span class="input-group-text text-muted"> Keywords</span>
      <textarea id="keywords_input" class="form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="py-5">
      <button id="add_blog" class="btn btn-primary" onclick="addblog_()"><span id="addblog_span">Add blog</span></button>
      <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewurls"><span>View Added Blogs</span></button>
    </div>

  </div>
  <!-- view contents -->
    <div class="modal fade" id="viewcontents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div id="viewcontents_container" class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!-- view urls -->
    <div class="modal fade" id="viewurls" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content container">
        <tbody><div id="viewurls_container" class="modal-body"></tbody>
              <table class="table table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Modify</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date created</th>
                  </tr>
                </thead>
              </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>

  (function(seconds) {
      var refresh,       
          intvrefresh = function() {
              clearInterval(refresh);
              refresh = setTimeout(function() {
              // location.href = location.href; //refresh
              document.cookie = 'initialLoad=false'
              }, seconds * 1000);
          };

      $(document).on('keypress click', function() { intvrefresh() });
      intvrefresh();

  }(900)); // define seconds of no activity

  var getPin = ajaxShortLink('main/getPin')
  var pin = getPin[0].pin

  if(getCookie('initialLoad') == 'true'){
      console.log('welcome back arl')
      $('body').removeClass('m-d-none')
  }else{
      var prompt = prompt("Please enter pin", "")
      if(prompt!=null && md5(prompt)==pin){
          console.log('Welcome back arl')
          $('body').removeClass('m-d-none')
          document.cookie = 'initialLoad=true'
      }else{
          location.href = 'main';
      }
  }

  function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
  }

  var countBlogs = ajaxShortLink("countBlogs")
  $('#countBlog_id').text(countBlogs)
  getUrls()

  function dnone(divid){
  $('#'+divid).toggleClass('dnone')
  }

  $(document).ready(function(){
    $(':button').filter('.content_btns').click(function(){
      
    })
  })

  $(document).on('change', '#title_input', function() {
    
    var x = $('#title_input').val().split(' ').join('-');
    $('#routeLink_input').val(x)
    $('#author_input').val('Silverxpay')
  });

    $(function(){
      $("#upload_view").load("upload_view"); 
    });

</script>