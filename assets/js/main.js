async function alertThis(x){
  await alert(x)
  return location.reload()
}

function escapeHtml(text) {
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };
  return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}

function previewBlogImg(){
  blogImage.onchange = evt => {
    blogImageName = blogImagePath+blogImage.files[0].name
    const [file] = blogImage.files
    if (file) {
      blogImagePreview.src = URL.createObjectURL(file)
    }
  }
}

animateCSS = function(element, animation, prefix = 'animate__'){
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }
    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });
}

