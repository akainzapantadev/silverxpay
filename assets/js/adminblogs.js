// gvars
  var globalID = 0
  var contents=''
  var blogImageName = ''
  var blogImagePath = 'assets/images/blogimages/'

function addblog_(){
  var titleVar = $('#title_input').val()
  var routeVar = $('#routeLink_input').val()
  var authorVar = $('#author_input').val()
  var sdescVar = $('#sdesc_input').val()
  var descVar = $('#desc_input').val()
  var keywordsVar = $('#keywords_input').val()
  var blogContents = $('#contents_input').val()

  var uploaderName = $('#blogImage').attr('name')
  var uploaderFile = $('#blogImage')[0].files[0]
  var uploaderFileName = $('#blogImage')[0].files[0].name

  var imageUploadFormData = new FormData();
  imageUploadFormData.append(uploaderName,uploaderFile,uploaderFileName)
  var upload = backendHandleFormData('upload_file',imageUploadFormData)

  console.log(upload)

  if(
    titleVar != '' &&
    routeVar != '' &&
    authorVar!= '' &&
    sdescVar != '' &&
    descVar  != '' &&
    keywordsVar!= ''
  ){

    // var checkIfBlogExist = ajaxShortLink("checkIfBlogExist",{"id":111}) // for testing
    var checkIfBlogExist = ajaxShortLink("checkIfBlogExist",{"id":globalID})
      if(checkIfBlogExist==1){
        var getImagePath = ajaxShortLink("getBlog",{"id":globalID})
        var test = ajaxShortLink("deleteBlogImageBeforeUpdatingBlogDetails",{"ImagePath":getImagePath.blogImage})

        // console.log(test)
        var updateresult = 
            ajaxShortLink("updateBlog",{
            "title":titleVar,
            "routeLink":routeVar,
            "author":authorVar,
            "sdesc":sdescVar,
            "content":blogContents,
            "blogImage":blogImageName,
            "desc":descVar,
            "keywords":keywordsVar,
            "id":globalID,
          })

          alertthis('Blog updated')
      }else{
            var addresult = 
            ajaxShortLink("addBlog",{
            "title":titleVar,
            "routeLink":routeVar,
            "author":authorVar,
            "sdesc":sdescVar,
            "content":blogContents,
            "blogImage":blogImageName,
            "desc":descVar,
            "keywords":keywordsVar,
          })

          alertthis('Blog added')
      }
  }else{
    alert('please fill all blanks')
  }
}
async function alertthis(message){
  const x = await alert(message)
  return reloadpage()
}
function reloadpage(){
  location.reload()
}
function getUrls(){
  var urls = 
  ajaxShortLink("getUrls")
  for (let index = 0; index < urls.length; index++) {
    $('#viewurls_container').append(
      // '<div class="mx-3">'+
      // '<a onclick="editblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">edit</span></a>'+
      // '<a onclick="deleteblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">delete</span></a>'+
      // '<a href = "https://safelypal.com/blogs/'+urls[index].routeLink+'" target="_blank" mx-1"><span id="title'+index+'">'+urls[index].title.substring(0,30)+'</span></a>'+
      // '<span style="color: red !important;" id="title'+index+'">'+' '+urls[index].dateCreated+'</span>'+
      // '</div>'

      '<tr>'+
        '<th scope="row">'+urls[index].id+'</th>'+
        '<td>'+
        '<a onclick="editblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">edit</span></a>'+
        '<a onclick="deleteblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">delete</span></a>'+
        '</td>'+
        '<td>'+
        '<a href = "https://safelypal.com/blogs/'+urls[index].routeLink+'" target="_blank" mx-1"><span id="title'+index+'">"'+urls[index].title.substring(0,40)+'"</span></a>'+
        '</td>'+
        '<td>'+
        '<span style="color: orange !important;" id="title'+index+'">'+' '+urls[index].dateCreated+'</span>'+
        '</td>'+
      '</tr>'
    )
  }
}
function editblog(id){
  $('#content_container').empty()
  $('.content_btn_container').empty()
  globalID = id
  var editblog = 
  ajaxShortLink("getBlog",{"id":id})

  var fullDesc = editblog['seo'][1].content
  var keywords = editblog['seo'][2].content
  var routeLinkRaw = editblog['seo'][3].content
  var RouteLink = routeLinkRaw.replace('safelypal.com/blogs/','')
  var shortDesc = editblog.desc
  var title = editblog.title
  var author = editblog['blogDetails'][0].author
  var contents = editblog.contents
  
  $('#title_input').val(title)
  $('#routeLink_input').val(RouteLink)
  $('#author_input').val(author)
  $('#sdesc_input').text(shortDesc)
  $('#desc_input').text(fullDesc)
  $('#keywords_input').text(keywords)
  $('#blogImagePreview').attr('src',editblog.blogImage)

  $('#viewurls').modal('toggle')
  $('#addblog_span').text('Update Blog')
  editcontents_input()

  async function editcontents_input(){
  await $('#content_container').append(
    '<div class="input-group">'+
      '<span class="input-group-text text-muted"> Contents</span>'+
      '<textarea id="contents_input" class="form-control" aria-label="With textarea"></textarea>'+
    '</div>'
  )
  $('#viewcontents_container').append(contents)

  return $('#contents_input').text(contents)
  }
}
  function deleteblog(id){

  var getImagePath = ajaxShortLink("getBlog",{"id":id})
  var x = window.prompt("Kindly input 'bwakanang delete this' to proceed", "")

  if(x=='bwakanang delete this'){
    ajaxShortLink("deleteBlog",{"id":id,"ImagePath":getImagePath.blogImage})
    alertthis('Blog removed!');
  }else if(x == "null" || x == null || x == ""){
    return;
  }else{
    alert('try again')
  }
}
