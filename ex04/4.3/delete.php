<?php 
	session_start();
	if (isset($_GET['mtl'])) {
		$mtl = $_GET['mtl'];
	}
	unset($_SESSION['documents'][$mtl]);
	setcookie('msg', 'Xóa thành công', time() + 3);
	header('location: index.php');
 ?>