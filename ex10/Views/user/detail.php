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
 			<li>Avatar : <img src="https://png.pngtree.com/png-clipart/20190906/original/pngtree-520-couple-avatar-girl-avatar-little-dinosaur-cartoon-cute-png-image_4563357.jpg" width="15%" height="5%" alt=""></li>
 		</ul>
 		<a href="/Homework/php22.com/ex10/index.php?mod=user&act=index" class="btn btn-primary">Back</a>
 	</div>
 </body>
 </html>