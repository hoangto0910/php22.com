<!-- Blog Sidebar Area -->
<div class="col-12 col-sm-9 col-md-6 col-lg-4">
    <div class="post-sidebar-area">

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Title -->
            <div class="widget-title">
                <h6>About Me</h6>
            </div>
            <!-- Thumbnail -->
            <div class="about-thumbnail">
                <img src="uploads/aerith.jpg" alt="">
            </div>
            <!-- Content -->
            <div class="widget-content text-center" style="margin-top: 20px;">
                <h3>Hello !! I'm Hoang</h3>
                <p>Xin Chào Mình là Tô Hoàng, mình là sinh viên trường đại học kinh tế kỹ thuật công nghiệp - Đây là project blog Của mình <(")</p>
            </div>
        </div>

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Title -->
            <div class="widget-title">
                <h6>Subscribe &amp; Follow</h6>
            </div>
            <!-- Widget Social Info -->
            <div class="widget-social-info text-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
            </div>
        </div>

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Title -->
            <div class="widget-title">
                <h6>Popular Posts</h6>
            </div>

            <?php foreach ($posts_popular as $post_popular): ?>

                <!-- Single Latest Posts -->
                <div class="single-latest-post d-flex">
                    <div class="post-thumb">
                        <img src="uploads<?php echo $post_popular['thumbnail']?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post_blog['id'] ?>&slug=<?php echo $post_blog['slug'] ?>" class="post-title">
                            <h6><?php echo $post_popular['title'] ?></h6>
                        </a>
                        <a href="#" class="post-author"><i class="fa fa-eye"></i> <?php echo $post_popular['view_count'] ?></a>
                    </div>
                </div>

            <?php endforeach ?>

        </div>

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Adds -->
            <a href="#"><img src="Public/frontend/img/blog-img/add.png" alt=""></a>
        </div>

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Title -->
            <div class="widget-title">
                <h6>Newsletter</h6>
            </div>
            <!-- Content -->
            <div class="newsletter-content">
                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                <form action="#" method="post">
                    <input type="email" name="email" class="form-control" placeholder="Your email">
                    <button><i class="fa fa-send"></i></button>
                </form>
            </div>
        </div>

        <!-- ##### Single Widget Area ##### -->
        <div class="single-widget-area">
            <!-- Title -->
            <div class="widget-title">
                <h6>popular tags</h6>
            </div>
            <!-- Tags -->
            <ol class="popular-tags d-flex flex-wrap">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Unique</a></li>
                <li><a href="#">Template</a></li>
                <li><a href="#">Photography</a></li>
                <li><a href="#">travel</a></li>
                <li><a href="#">lifestyle</a></li>
                <li><a href="#">Wordpress Template</a></li>
                <li><a href="#">food</a></li>
                <li><a href="#">Idea</a></li>
            </ol>
        </div>

    </div>
</div>
</div>
</div>
</section>
<!-- ##### Blog Content Area End ##### -->

<!-- ##### Instagram Area Start ##### -->
<div class="follow-us-instagram">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Follow Us On Instagram</h2>
                    <span>@foodeblog</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="instagram-slides owl-carousel">
                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta1.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta2.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta3.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta4.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta5.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="Public/frontend/img/blog-img/insta6.jpg" alt="">
                        <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Instagram Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Footer Curve Line -->
                <img class="footer-curve" src="Public/frontend/img/core-img/foo-curve.png" alt="">
                <!-- Footer Social Info -->
                <div class="footer-social-info d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                    <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                    <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                    <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                </div>
                <!-- Footer Curve Line -->
                <img class="footer-curve" src="Public/frontend/img/core-img/foo-curve.png" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="copywrite-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="Public/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="Public/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="Public/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="Public/frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="Public/frontend/js/active.js"></script>
</body>

</html>