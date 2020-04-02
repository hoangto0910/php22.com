<?php
	require "connect.php";
	require "helper.php";
	$data = $_POST;
	// die($data['content']);
	$data['slug'] = $data['title'];
	$data['slug'] = to_slug($data['slug']);
	$data['thumbnail'] = file_upload("uploads","thumbnail",500000000,array("jpg","png"));
	// echo "<pre>";
	// 	print_r($data);
	// echo "</pre>";
	$query = add("posts", $data);
	// die($query);
	// $query = "INSERT INTO posts(title,description,thumbnail,content,slug,user_id,category_id) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['content']."','".$data['slug']."','".$data['user_id']."','".$data['category_id']."')";
	// die($query);
	$result = $conn->query($query);
	setcookie("msg","Thêm thành công",time()+3);
	header('location: posts.php');
 ?>