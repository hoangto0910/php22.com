<?php 
	require_once "connect.php";

	// Lấy dữ liệu từ form gửi lên, gán biến data;
	$data = $_POST;
	//print_r($data);
	$query = "INSERT INTO categories (name, parent_id, thumbnail, slug, description) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."')";
	$status = $conn->query($query);
	setcookie('msg','Thêm mới thành công',time() + 3);
	header('location: categories.php');
 ?>