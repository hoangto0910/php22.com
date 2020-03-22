<?php
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_FILES['file_name'])) {
		$file_name = $_FILES['file_name']['name'];
	}
	session_start();
	$_SESSION['documents'][] = [
		'name'=>$name,
		'file_name'=>$file_name,
	];
	//lua vao folder anh
	$target_dir = "uploads/";
	$target_file = $target_dir . $file_name;
	if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)) {
		setcookie('msg', 'Upload File Thành công', time() + 3);
	}else{
		setcookie('msg', 'Upload File Thất bại', time() + 3);
	}
	header('location: index.php');
 ?>