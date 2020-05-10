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
				<h3 class="card-title">Title</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<h3 align="center">DevMind - Education And Technology Group</h3>
						<h3 align="center">Add New User</h3>
						<hr>
						<form action="/mvc_new/index.php?mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="" placeholder="" name="name">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" id="" placeholder="" name="email">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="text" class="form-control" id="" placeholder="" name="password">
							</div>
							<button type="submit" class="btn btn-primary">Create</button>
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