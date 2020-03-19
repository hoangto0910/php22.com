<?php
	session_start();
	if (isset($_GET['ID'])) {
		$ID = $_GET['ID'];
		unset($_SESSION['info'][$ID]);
	}
	setcookie("msg", "Xóa Thành Công", time()+3);
	header('location: list.php');
?>