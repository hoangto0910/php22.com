<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	require "connect.php";

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from categories WHERE id = ". $id;
    //echo $query
	// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $category = $result->fetch_assoc();

    //print_r($category);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
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
 			<li>Id : <?php echo $category['id']; ?></li>
 			<li>Name : <?php echo $category['name']; ?></li>
 			<li>Parent_id : <?php echo $category['parent_id']; ?></li>
 			<li>Thumbnail : <?php echo $category['thumbnail'] ?></li>
 			<li>Slug : <?php echo $category['slug'] ?></li>
 			<li>Description : <?php echo $category['description'] ?></li>
 		</ul>
 		<a href="categories.php" class="btn btn-primary">Back</a>
 	</div>
 </body>
 </html>
