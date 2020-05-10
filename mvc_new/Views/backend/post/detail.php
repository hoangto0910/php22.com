<?php 
$post['content'] = htmlspecialchars($post['content']);
require_once "Views/backend/includes/header.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Blank Page</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<h3 class="text-center">--Thông tin chi tiết---</h3>
						<ul>
							<li>Id : <?php echo $post['id'] ?></li>
							<li>Title : <?php echo $post['title'] ?></li>
							<li>Description : <?php echo $post['description'] ?></li>
							<?php if (isset($post['thumbnail'])) {?>
								<li>Thumbnail : <?php echo $post['thumbnail'] ?></li>
							<?php } ?>
							<li>Content : <?php echo $post['content'] ?></li>
							<li>Slug : <?php echo $post['slug'] ?></li>
							<li>User : <?php echo $post['user']['name'] ?></li>
							<li>Danh mục : <?php echo $post['category']['name'] ?></li>
						</ul>
						<a href="/mvc_new/index.php?mod=post&act=index" class="btn btn-primary">Back</a>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						Footer
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php 
		require_once "Views/backend/includes/footer.php";
		?>