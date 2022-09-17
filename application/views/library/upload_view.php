<div class="w-50">
    <!-- <div class="mb-3">
      <input class="form-control text-muted" type="file" onclick="previewBlogImg()" name="blogImage" id="blogImage" accept=".jpg,.jpeg,.png,.gif">
      <button onclick="upload()" class="btn btn-outline-primary" name="submit">upload</button>
    </div> -->

    <div class="input-group mb-3">
      <input type="file" class="form-control text-muted" aria-describedby="button_upload" onclick="previewBlogImg()" name="blogImage" id="blogImage" accept=".jpg,.jpeg,.png,.gif">
        <script>
            function previewBlogImg(){
              blogImage.onchange = evt => {
                blogImageName = blogImagePath+blogImage.files[0].name
                const [file] = blogImage.files
                if (file) {
                  blogImagePreview.src = URL.createObjectURL(file)
                }
              }
            }
        </script>
      <!-- <button onclick="upload()" class="btn-transparent" type="button" id="button_upload">upload</button> -->
        <script>
          function upload(){
            var uploaderName = $('#blogImage').attr('name')
            var uploaderFile = $('#blogImage')[0].files[0]
            var uploaderFileName = $('#blogImage')[0].files[0].name
            
            var imageUploadFormData = new FormData();
            imageUploadFormData.append(uploaderName,uploaderFile,uploaderFileName);

            // var object = {};
            // imageUploadFormData.forEach(function(value, key){
            //     object[key] = value;
            // });
            // var json = JSON.stringify(object);
            // console.log(json);
            var upload = backendHandleFormData('upload_file',imageUploadFormData);
          }
        </script>
    </div>
    <img id="blogImagePreview" src="" style="max-width:500px;max-height:400px;" onerror="this.src='https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png'" src="#" alt="Preview" />
</div>


<!-- load this on other page -->
<!-- <script>
  $(function(){
    $("#upload_view").load("upload_view"); 
  });
</script> -->
<!-- load this on other page -->