<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Silverxpay Blogs</title>
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="title" content="SafelyPal blogs - from SafelyPal Team">
        <meta name="description" content="The expansion of the cryptocurrency business is being covered by more blogs and media outlets than ever before. There is never a lack of sources to keep up with what's occurring in crypto, from the major media companies to tiny indie websites.">

        <meta name="keywords" content="cryptocurrency blog, cryptocurrency blog sites, cryptocurrency blog website, cryptocurrency blog updates, cryptocurrency blog for beginners, crypto blog, crypto update blog, best blog cryptocurrency, cryptocurrency blog sites">

        <meta name="robots" content="index,follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="SAFELYPAL-DEV">
        <meta name="google-site-verification" content="" />
        <meta property="og:title" content="SafelyPal blogs - from SafelyPal Team"/>
        <meta property="og:description" content="The expansion of the cryptocurrency business is being covered by more blogs and media outlets than ever before. There is never a lack of sources to keep up with what's occurring in crypto, from the major media companies to tiny indie websites."/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content="silverxpay.info/blogs"/>

  <link href="assets/Others/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
			rel="stylesheet"/>

		<link
			href="assets/Others/vendor/bootstrap-icons/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<link href="assets/Others/vendor/aos/aos.css" rel="stylesheet" />
		<link
			href="assets/Others/vendor/glightbox/css/glightbox.min.css"
			rel="stylesheet"
		/>
		<link href="assets/Others/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
		<link href="assets/Others/vendor/remixicon/remixicon.css" rel="stylesheet" />

		<!-- Template Main CSS File -->
		<link href="assets/css/main.css" rel="stylesheet" />

  <!-- links -->
		<link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/Others/fontawesome6/css/all.css">
    <link href="assets/Others/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/Others/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/Others/js/jQuery.js"></script>
    <script src="assets/Others/js/ajaxupload.js"></script>
    <script src="assets/Others/js/md5.js"></script>
    <script src="assets/Others/fontawesome6/js/all.js"></script>
    <script src="assets/Others/vendor/bootbox/bootbox.min.js"></script>
    <script src="assets/Others/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/Others/vendor/jquery/jquery.min.js"></script>

</head>

<body class="page-blog">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="main" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Silverxpay</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="main">Home</a></li>
          <li><a href="blogs" class="active">Blog</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/images/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Blog</h2>
        <ol>
          <li><a href="main">Home</a></li>
          <li>Blog</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">

        <?php 
            echo '<div class="col-lg-6">';
            echo '<article class="d-flex flex-column">';
                for ($i=0; $i < 3; $i++) { 
                  echo '<div class="post-images">';
                    echo '<a href="blogs/'.$res[$i]->routeLink.'"><img src="'.$res[$i]->blogImage.'" alt="" class="img-fluid"></a>';
                  echo '</div>';
                  echo '<h2 class="title">';
                  echo '<a href="blogs/'.$res[$i]->routeLink.'">'.$res[$i]->title.'</a>';
                  echo '</h2>';
                echo '<div class="meta-top">';
                  echo '<ul>';
                    echo '<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blogs/'.$res[$i]->routeLink.'">'.$res[$i]->author.'</a></li>';
                    echo '<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blogs/'.$res[$i]->routeLink.'">'.$res[$i]->dateCreated.'</a></li>';
                  echo '</ul>';
                echo '</div>';

                echo '<div class="content">';
                  echo '<p>';
                    echo $res[$i]->desc;
                  echo '</p>';
                echo '</div>';
              
                echo '<div class="read-more mt-auto align-self-end">';
                  echo '<a href="blogs/'.$res[$i]->routeLink.'">Read More <i class="bi bi-arrow-right"></i></a>';
                echo '</div>';
                }
            echo '</article>';
            echo '</div>';
        ?>

            </div><!-- End blog posts list -->

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->
            <!-- End blog pagination -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
<!-- 
              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div> -->
              <!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div id="recentBlogs" class="mt-3"></div>

              </div><!-- End sidebar recent posts-->

              <!-- <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> -->
              <!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
                
                <div class="footer"></div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/Others/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/Others/vendor/aos/aos.js"></script>
  <script src="assets/Others/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/Others/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/Others/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/Others/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
  displayFooter()
  	var blogsList = ajaxShortLink('getAll',{table:'blogs_tbl',sortBy:'id',sortOrder:'desc'})

    for (let index = 0; index < 7; index++) {
      $('#recentBlogs').append(
        '<div class="post-item mt-3">'+
        '  <img src="'+blogsList[index].blogImage+'" alt="" class="flex-shrink-0">'+
        '  <div>'+
        '    <h4><a href="blogs/'+blogsList[index].routeLink+'">'+blogsList[index].title+'</a></h4>'+
          blogsList[index].dateCreated+
        '  </div>'+
        '</div>'
      )
    }
</script>