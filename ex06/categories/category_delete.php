<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	require "connect.php";

	$query = "DELETE from categories where id=$id"; 

	$status = $conn->query($query);
	setcookie('msg','Xóa Thành Công',time()+3);
	header('location: categories.php');
 ?>