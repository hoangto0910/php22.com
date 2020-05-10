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
						<h3 class="text-center">Thông tin USER</h3>
						<ul>
							<li>Id : <?php echo $user['id'] ?></li>
							<li>Name : <?php echo $user['name'] ?></li>
							<li>Email : <?php echo $user['email']; ?></li>
							<li>Password : <?php echo $user['password'] ?></li>
							<li>Avatar : <img src="https://png.pngtree.com/png-clipart/20190906/original/pngtree-520-couple-avatar-girl-avatar-little-dinosaur-cartoon-cute-png-image_4563357.jpg" width="15%" height="5%" alt=""></li>
						</ul>
						<a href="/Homework/php22.com/ex/index.php?mod=user&act=list" class="btn btn-primary">Back</a>
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