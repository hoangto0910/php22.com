<?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PHP22 - My Blog</title>

    <!-- Favicon -->
    <link rel="icon" href="/Public/frontend/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="Public/frontend/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="Public/frontend/img/core-img/logo.png" alt="">
            <div class="foode-preloader">
                <span></span>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Nav brand -->
                         <a href="/mvc_new/index.php" class="nav-brand"><h2><i>My BLOG</i></h2></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="foode-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="foodeNav">

                        <!-- Nav brand -->
                         <a href="/mvc_new/index.php" class="nav-brand"><h2><i>My BLOG</i></h2></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/mvc_new/index.php">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="/mvc_new/index.php">Home</a></li>
                                            <li><a href="/mvc_new/index.php">About</a></li>
                                            <li><a href="/mvc_new/index.php?mod=home&act=contact">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories</a>
                                        <ul class="dropdown">
                                            <?php foreach ($categories as $category): ?>
                                                <li><a href="/mvc_new/index.php?mod=home&act=showCategory&id=<?php echo $category['id'] ?>&slug=<?php echo $category['slug'] ?>"><?php echo $category['name']; ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li><a href="/mvc_new/index.php">About</a></li>
                                    <li><a href="/mvc_new/index.php?mod=home&act=contact">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <?php foreach ($posts_menu as $post_menu) { ?>
            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(uploads<?php echo $post_menu['thumbnail'] ?>);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p><?php echo $post_menu["created_at"] ?></p>
                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post_menu['id'] ?>&slug=<?php echo $post_menu['slug'] ?>" class="post-title">
                        <h4><?php echo $post_menu["title"] ?></h4>
                    </a>
                </div>
            </div>
            <?php } ?>   

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Featured Post Area -->
                <div class="col-12">
            
                </div>
            </div>