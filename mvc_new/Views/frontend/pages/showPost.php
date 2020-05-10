<?php 
	require_once "Views/frontend/includes/header.php";
?>
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
					<?php 
						echo $posts_detail[0]['content'];
					 ?>
					 <br>
					<i><b>Created By : <?php echo $posts_detail[0]['user']['name']; ?></b></i>
				</div>

			</div>

<?php 
	require_once "Views/frontend/includes/footer.php";
?>