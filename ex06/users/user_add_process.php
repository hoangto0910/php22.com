<?php 
	$data = $_POST;
	// print_r($data);
	$data['password'] = md5($data['password']);
	require "connect.php";
	$query = "INSERT INTO users(name,email,password) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."')";
	$result = $conn->query($query);
	setcookie('msg','Thêm Mới Thành Công',time() + 3);
	header('location: users.php');
 ?>