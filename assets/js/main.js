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


/**
* Template Name: Nova - v1.1.0
* Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    document.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: 'slide',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});


function gobackhome(){
  console.log('going back home')
  window.location.replace(window.location.origin);
}


function displayFooter(){
  $('.footer').append(
    '  <footer id="footer" class="footer">'+
    '  <div class="footer-content">'+
    '    <div class="container">'+
    '      <div class="row gy-4">'+
    '        <div class="col-lg-5 col-md-12 footer-info">'+
    '          <a href="main" class="logo d-flex align-items-center">'+
    '            <span>Silverxpay</span>'+
    '          </a>'+
    '          <p>'+
    '            SilverxPay is an easy and practical cryptocurrency wallet application which does not requires much time to do the tasks to make profit online.'+
    '          </p>'+
    // '          <div class="social-links d-flex mt-3">'+
    // '            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>'+
    // '            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>'+
    // '            <a href="#" class="instagram"'+
    // '              ><i class="bi bi-instagram"></i'+
    // '            ></a>'+
    // '            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>'+
    // '          </div>'+
    '        </div>'+
    ''+
    '        <div class="col-lg-2 col-md-3 footer-links">'+
    '          <h4>Links</h4>'+
    '          <ul>'+
    '            <li><i class="bi bi-dash"></i> <a href="main">Home</a></li>'+
    '            <li>'+
    '              <i class="bi bi-dash"></i> <a href="blogs">Blogs</a>'+
    '            </li>'+
    '          </ul>'+
    '        </div>'+
    '        <div class="col-lg-2 col-md-1 footer-links">'+
    '          <h4>Mentions</h4>'+
    '            <ul>'+
    '              <li>'+
    '                <a href="https://bootstrapmade.com/">BootstrapMade</a>'+
    '              </li>'+
    '              <li>'+
    '                </i> <a href="#">Arldev</a>'+
    '              </li>'+
    '            </ul>'+
    '          </div>'+
    '        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">'+
    '          <h4>Contact Us</h4>'+
    '          <p>'+
    '            <strong>Email:</strong> silverxpayofficial@gmail.com<br />'+
    '            <strong>Instagram:</strong> silverxpayofficial<br />'+
    '          </p>'+
    '        </div>'+
    '      </div>'+
    '    </div>'+
    '  </div>'+
    ''+
    '  <div class="footer-legal">'+
    '    <div class="container">'+
    '      <div class="copyright">'+
    '        &copy; Copyright <strong><span>Silverxpay</span></strong'+
    '        >. All Rights Reserved'+
    '      </div>'+
    '    </div>'+
    '  </div>'+
    '</footer>'
    )
}

function contactus_(){
  var name = $('#name_contactus_input').val()
  var email = $('#emailaddress_contactus_input').val()
  var message = $('#message_contactus_input').val()

  var data = [
    {
      name: "name",
      value: name
    },
    {
      name: "emailaddress",
      value: email
    },
    {
      name: "message",
      value: message
    }
  ]

  if(name==''||email==''||message==''){
    alert('please fill out fields')
  }else{
    var res = ajaxShortLink('main/insertContactUs',data);
    console.log(res);

    if(res==1){
      alert('Thank you for messaging us!')
    }else{
      alert('Submit error, please try again')
    }

    $('#name_contactus_input').val('')
    $('#emailaddress_contactus_input').val('')
    $('#message_contactus_input').val('')
  }
}
