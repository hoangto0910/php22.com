<?php 
	$id = $_GET['id'];
	require "connect.php";
	require "helper.php";
	$query = delete("posts",$id);
	// die($query);
	// $query = "DELETE FROM posts WHERE id = " .$id;
	$result = $conn->query($query);
	setcookie('msg','Xóa Thành Công',time()+3);
	header('location: posts.php');
 ?>