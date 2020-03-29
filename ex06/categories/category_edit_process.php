<?php 
	$id = $_POST['id'];
	$data = $_POST;
	require "connect.php";

	$query = "UPDATE categories SET name='". $data['name'] . "',parent_id='".$data['parent_id']."',thumbnail='".$data['thumbnail']."',slug='".$data['slug']."',description='". $data['description'] ."' WHERE id=" . $id ;
	echo $query;

	$status = $conn->query($query);
	setcookie('msg','Sửa Thành Công',time() + 3);
	header('location: categories.php');
 ?>