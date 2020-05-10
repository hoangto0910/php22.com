<?php require_once "Views/frontend/includes/header.php" ?>
<section class="blog-content-area section-padding-100">
	<div class="container">
		<div class="row">
			<!-- Featured Post Area -->
			<div class="col-12">
			</div>
		</div>

		<div class="row justify-content-center">
			<!-- Blog Posts Area -->
			<div class="col-12 col-lg-8">
				<div class="blog-posts-area">

					<!-- content -->
					<?php foreach ($posts as $post): ?>
						<!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="uploads<?php echo $post['thumbnail'] ?>" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date"><?php echo $post['created_at'] ?> / foody</p>
                                <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post['id'] ?>&slug=<?php echo $post['slug'] ?>" class="post-title">
                                    <h4><?php echo $post['title'] ?></h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> <?php echo $post['view_count'] ?></a>
                                </div>
                                <p class="post-excerpt"><?php echo $post['description'] ?></p>
                                <a href="/mvc_new/index.php?mod=home&act=showPost&id=<?php echo $post['id'] ?>&slug=<?php echo $post['slug'] ?>" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="Public/frontend/img/core-img/post-curve-line.png" alt="">
                        </div>
					<?php endforeach ?>

				</div>
				 <!-- Pager -->
                <ol class="foode-pager mt-50">
                    <li><a href="/mvc_new/index.php?mod=home&act=showCategory&id=9&slug=dia-diem-an-uong-1588312932&page=<?php if($page == 1)
                    { echo $page = 1;}
                    else
                    { echo $page-1;} ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                    <li><a href="/mvc_new/index.php?mod=home&act=showCategory&id=9&slug=dia-diem-an-uong-1588312932&page=<?php if($page == 3)
                    { echo $page = 1;}
                    else
                    { echo $page+1;} ?>">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                </ol>

			</div>
<?php require_once "Views/frontend/includes/footer.php" ?>