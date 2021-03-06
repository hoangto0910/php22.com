<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>USERS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- USERS ---</h3>
		<a href="/Homework/php22.com/ex/index.php?mod=user&act=add" class="btn btn-primary">Add New user</a>
		<?php
            if (isset($_COOKIE["msg"])) {
            	?>
            	<div class="alert alert-success" role="alert">
            		<strong>Success !!!</strong>
            		<?php
            		echo $_COOKIE["msg"]; 
            		?>
            	</div>
            	<?php 
            }
            ?>
		<table class="table">
			<thead>
				<th width="5%">ID</th>
				<th width="10%">Name</th>
				<th width="15%">Email</th>
				<th>Password</th>
				<th width="">Avatar</th>
				<th width="20%">Action</th>
			</thead>
			<?php foreach ($users as $key => $user): ?>	
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['name'] ?></td>
				<td>
					<?php echo $user['email']; ?>
				</td>
				<td><?php echo $user['password'] ?></td>
				<td><img src="https://png.pngtree.com/png-clipart/20190906/original/pngtree-520-couple-avatar-girl-avatar-little-dinosaur-cartoon-cute-png-image_4563357.jpg" width="80%" height="5%" alt=""></td>
				<td>
					<a href="/Homework/php22.com/ex/index.php?mod=user&act=detail&id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="/Homework/php22.com/ex/index.php?mod=user&act=edit&id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
					<a href="/Homework/php22.com/ex/index.php?mod=user&act=delete&id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>