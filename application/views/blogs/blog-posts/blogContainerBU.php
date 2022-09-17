<!DOCTYPE html>
<html lang="en">
    <head>
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

        
        
        
        <link rel="icon" href="../assets/imgs/icon-text.png" type="image/gif">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/blogs.css" rel="stylesheet" />
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-md">
            <div class="container">
            <div class="navbar-brand">
                <img src="../assets/imgs/safetypal_main_logo.png" alt="">
            </div>
            </div>
        </nav>
        <!-- Page Header-->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
                <div class="card-img-overlay text-center">
                    <div id="splash_container" class="">
                        <span class="splash-text">
                            <?php
                                echo $title;
                            ?>
                        </span>
                        <p class="splash-subtext" style="color:white;"> 
                            <?php
                                echo $desc;
                            ?>
                        </p>
                        <span class="meta text-muted">
                                Posted by
                                <a href="#!" style="color:white;">Safelypal Team</a>
                                <?php
                                echo $dateCreated;
                                ?>
                            </span>
                    </div>
                </div>
            </div>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <center>
                    <div>
                        <img id="blogImage" src="../<?php echo $blogImage; ?>" class="img-fluid py-5" alt="Responsive image">
                    </div>
                </center>

                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                         <?php
                            echo $contents;
                        ?>

                        <span class="d-flex justify-content-end mb-4">
                            <a class="btn btn-primary text-uppercase" href="../blogs">View blogs →</a>
                        </span>
                    </div>
                </div>

            </div>
        </article>
        <!-- Footer-->
        <div class="footer"></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
<script>
    displayFooter()
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("year_now").innerHTML = year;

    var altImage = $('#blogImage').attr('src').replace('../assets/imgs/blogimages/','Silverxpay Blog ')
    var x = altImage.replace('.png','')
    var y = x.replaceAll('-',' ')

    $('#blogImage').attr('alt',y)
</script>

