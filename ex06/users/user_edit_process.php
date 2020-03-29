<?php
	$id = $_POST['id'];
	$data = $_POST;
	require "connect.php";
	$query = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."' WHERE id = " . $id;
	$result = $conn->query($query);
	setcookie('msg','Sửa Thành Công', time() + 3);
	header('location: users.php');
 ?>