<?php 
	// Cau hinh 
	$severname = "localhost";
	$user = "root";
	$password = "";
	$dbname = "php_blog_new";
	// tao connect
	$conn = new mysqli($severname, $user, $password, $dbname);
	// test 
	// if ($conn->connect_errno) {
	// 	echo "Fail to connect : " .$conn->connect_errno;
	// 	exit();
	// }else{
	// 	echo "Success";
	// }
 ?>