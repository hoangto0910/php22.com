<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id']; 	
	}
	require "connect.php";
	$query = "DELETE FROM users WHERE id = " . $id;
	$result = $conn->query($query);
	setcookie('msg','Xóa Thành Công',time() + 3);
	header('location: users.php');
 ?>