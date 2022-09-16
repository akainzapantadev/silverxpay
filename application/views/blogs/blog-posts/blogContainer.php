<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Silverxpay - <?php echo $dataContainer['title']?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="robots" content="index,follow">
        <meta name="language" content="English">
        <meta name="author" content="SAFELYPAL-DEV">
        <meta name="google-site-verification" content="" />

        <!-- <meta name="title" content="<?php echo $dataContainer['title']?>"> -->
        <meta name="description" content="<?php echo $dataContainer['description']?>">
        <meta name="keywords" content="<?php echo $dataContainer['keywords']?>">

        <meta property="og:title" content="<?php echo $dataContainer['title']?>"/>
        <meta property="og:description" content="<?php echo $dataContainer['description']?>"/>
        <meta property="og:image" content="https://safelypal.com/<?php echo $blogImage; ?>"/>
        <meta property="og:url" content="<?php echo $dataContainer['url']?>"/>

        <title class="main-color"><?php echo $dataContainer['title']?></title>
  <link href="../assets/Others/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
			rel="stylesheet"/>
		<link
			href="../assets/Others/vendor/bootstrap-icons/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<link href="../assets/Others/vendor/aos/aos.css" rel="stylesheet" />
		<link
			href="../assets/Others/vendor/glightbox/css/glightbox.min.css"
			rel="stylesheet"
		/>
		<link href="../assets/Others/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
		<link href="../assets/Others/vendor/remixicon/remixicon.css" rel="stylesheet" />
		<!-- Template Main CSS File -->
		<link href="../assets/css/main.css" rel="stylesheet" />
  <!-- links -->
		<link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/Others/fontawesome6/css/all.css">
    <link href="../assets/Others/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/Others/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- scripts -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/common.js"></script>
    <script src="../assets/Others/js/jQuery.js"></script>
    <script src="../assets/Others/js/ajaxupload.js"></script>
    <script src="../assets/Others/js/md5.js"></script>
    <script src="../assets/Others/fontawesome6/js/all.js"></script>
    <script src="../assets/Others/vendor/bootbox/bootbox.min.js"></script>
    <script src="../assets/Others/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/Others/vendor/jquery/jquery.min.js"></script>
    <base href="../">
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
          <li><a href="#" onclick="gobackhome()">Home</a></li>
          <li><a href="#" class="active">Blog</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/images/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>
          <?php
              echo $title;
          ?>
        </h2>
        <ol>
          <li><a onclick="gobackhome()">Home</a></li>
          <li>Blog Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">



              <h2 class="title">
                <?php
                  echo $title;
                ?>
              </h2>

              <div class="content">
                    <?php
                      echo $contents;
                    ?>
                <img id="blogImage" src="<?php echo $blogImage; ?>" class="img-fluid py-5 w-100 h-50" alt="Responsive image">

              </div><!-- End post content -->

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                  <a href="blog-details.html">
                    Silverxpay   
                  </a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                  <a href="blog-details.html">
                    <?php
                      echo $dateCreated;
                    ?>
                  </a></li>
                </ul>
              </div><!-- End meta top -->


              <!-- <div class="reply-form">

                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div> -->


          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

<div class="footer"></div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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
</script>