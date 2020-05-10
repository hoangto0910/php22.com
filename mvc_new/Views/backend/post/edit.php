<?php
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
				<h3 class="card-title">Thông tin chi tiết</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<h3 align="center">DevMind - Education And Technology Group</h3>
						<h3 align="center">Edit post</h3>
						<hr>
						<form action="/mvc_new/index.php?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
							<input type="hidden" value="<?php echo $post['id']?>" name="id">
							<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title'] ?>">
							</div>
							<div class="form-group">
								<label for="">description</label>
								<input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description'] ?>">
							</div>
							<!-- <div class="form-group">
								<label for="">thumbnail</label>
								<input type="file" class="form-control" id="" placeholder="" name="thumbnail">
							</div> -->
							<div class="form-group">
								<label for="">content</label>
								<textarea name="content" class="form-control" id="summernote" cols="30" rows="10" data-content="<?php echo $post['content'] ?>"></textarea>
							</div>
							<div class="form-group">
								<label for="">user</label>
								<select name="user_id" id="" class="form-control">
									<?php foreach($users as $user){ ?>
										<option value="<?php echo $user['id'] ?>" <?php if ($user['id'] == $post['user_id']) {
											echo "selected";
										} ?>><?php echo $user['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="">Danh mục</label>
								<select name="category_id" id="" class="form-control">
									<?php foreach($categories as $category){ ?>
										<option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $post['category_id']) {
											echo "selected";
										} ?>><?php echo $category['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Edit</button>
						</form>
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
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#summernote').summernote();
				$("#summernote").summernote('editor.pasteHTML',$("#summernote").data("content"));
			});
		</script>