<?php 
	$data = $_POST;
	$id = $data['id'];
	require "helper.php";
	require "connect.php";
	$data['thumbnail'] = file_upload("uploads","thumbnail",50000000,array("jpg","png"));
	$data['slug'] = $data['title'];
	$data['slug'] = to_slug($data['slug']);
	$query = update("posts",$data,$id);
	// die($query);
	// $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',thumbnail='".$data['thumbnail']."',content='".$data['content']."',slug='".$data['slug']."',user_id='".$data['user_id']."',category_id='".$data['category_id']."' WHERE id = " . $data['id'];
	$result = $conn->query($query);
	setcookie('msg','Sửa Thành Công',time()+3);
	header('location: posts.php');
 ?>