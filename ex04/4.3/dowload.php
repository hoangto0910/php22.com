<?php 
	session_start();
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
	}
	setcookie('msg', "Download File $name Thành công", time()+3 );
	header('location: index.php');
 ?>