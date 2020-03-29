<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	require "connect.php";
	$query = "SELECT * FROM users WHERE id = " . $id;
	$result = $conn->query($query);
	$user = $result->fetch_assoc();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Detail</title>
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h3 class="text-center">Thông tin USER</h3>
 		<ul>
 			<li>Id : <?php echo $user['id'] ?></li>
 			<li>Name : <?php echo $user['name'] ?></li>
 			<li>Email : <?php echo $user['email']; ?></li>
 			<li>Password : <?php echo $user['password'] ?></li>
 		</ul>
 		<a href="users.php" class="btn btn-primary">Back</a>
 	</div>
 </body>
 </html>