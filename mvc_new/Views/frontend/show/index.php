<?php require_once "Views/frontend/includes/header.php" ?>

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Featured Post Area -->
            <div class="col-12">
                <h3 class="text-center">Top Các địa điểm nổi bật</h3>
                <div class="featured-post-area">
                    <div id="featured-post-slides" class="carousel slide d-flex flex-wrap" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active bg-img" style="background-image: url(uploads/top5_1.jpg)">
                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p>MAY 1, 2020 / foody</p>
                                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=11" class="post-title">
                                        <h2>5 quán ăn ngon Hà Nội sẽ khiến bạn hối hận nếu không thử</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="carousel-item bg-img" style="background-image: url(uploads/top5_2.jpg)">
                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p>MAY 1, 2020 / foody</p>
                                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=12" class="post-title">
                                        <h2>Bộ sưu tập những địa điểm ăn uống ngon rẻ ở Hà Nội hút khách</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="carousel-item bg-img" style="background-image: url(uploads/top5_3.jpg)">
                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p>MAY 1, 2020 / foody</p>
                                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=13" class="post-title">
                                        <h2>Địa chỉ những quán ăn View đẹp ở Hà Nội</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="carousel-item bg-img" style="background-image: url(uploads/top5_4.jpg )">

                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p>MAY 1, 2020 / foody</p>
                                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=14" class="post-title">
                                        <h2>Bật mí quán ăn ngon nổi tiếng, được yêu thích nhất ở Hà Nội</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="carousel-item bg-img" style="background-image: url(uploads/top5_5.jpg)">
                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p>MAY 1, 2020 / foody</p>
                                    <a href="/mvc_new/index.php?mod=home&act=showPost&id=15" class="post-title">
                                        <h2>Địa điểm ăn lãng mạn ở Hà Nội</h2>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#featured-post-slides" data-slide-to="0" class="active">
                                <h2>01</h2>
                                <a href="#">
                                    <h5>5 quán ăn ngon Hà Nội sẽ khiến bạn hối hận nếu không thử</h5>
                                </a>
                            </li>
                            <li data-target="#featured-post-slides" data-slide-to="1">
                                <h2>02</h2>
                                <a href="#" class="post-title">
                                    <h5>Bộ sưu tập những địa điểm ăn uống ngon rẻ ở Hà Nội hút khách</h5>
                                </a>
                            </li>
                            <li data-target="#featured-post-slides" data-slide-to="2">
                                <h2>03</h2>
                                <a href="#" class="post-title">
                                    <h5>Địa chỉ những quán ăn View đẹp ở Hà Nội</h5>
                                </a>
                            </li>
                            <li data-target="#featured-post-slides" data-slide-to="3">
                                <h2>04</h2>
                                <a href="#" class="post-title">
                                    <h5>Bật mí quán ăn ngon nổi tiếng, được yêu thích nhất ở Hà Nội</h5>
                                </a>
                            </li>
                            <li data-target="#featured-post-slides" data-slide-to="4">
                                <h2>05</h2>
                                <a href="#" class="post-title">
                                    <h5>Địa điểm ăn lãng mạn ở Hà Nội</h5>
                                </a>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <?php foreach ($posts_blog as $post_blog): ?>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="uploads<?php echo $post_blog['thumbnail'] ?>" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date"><?php echo $post_blog['created_at'] ?> / foody</p>
                                <!-- dang lam do hom qua -->
                                <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post_blog['id'] ?>&slug=<?php echo $post_blog['slug'] ?>" class="post-title">
                                    <h4><?php echo $post_blog['title'] ?></h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Tô Hoàng</a>
                                    <a href="#"><i class="fa fa-eye"></i> <?php echo $post_blog['view_count'] ?></a>
                                </div>
                                <p class="post-excerpt"><?php echo $post_blog['description'] ?></p>
                                <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post_blog['id'] ?>&slug=<?php echo $post_blog['slug'] ?>" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="Public/frontend/img/core-img/post-curve-line.png" alt="">
                        </div>
                        
                    <?php endforeach ?>        

                </div>

                <!-- Pager -->
                <ol class="foode-pager mt-50">
                    <li><a href="/mvc_new/index.php?page=<?php if($page == 1)
                    { echo $page = 1;}
                    else
                    { echo $page-1;} ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                    <li><a href="/mvc_new/index.php?page=<?php if($page == 4)
                    { echo $page = 1;}
                    else
                    { echo $page+1;} ?>">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                </ol>
            </div>
            <?php require_once "Views/frontend/includes/footer.php" ?>