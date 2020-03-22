<?php 
	session_start();
	if (isset($_GET['msp'])) {
		$msp = $_GET['msp'];
	}
	if (isset($_SESSION['products'][$msp])) {
		if ($_SESSION['products'][$msp]['SoLuong'] == 1) {
			unset($_SESSION['products'][$msp]);
		}else{
			$_SESSION['products'][$msp]['SoLuong']--;
		}
	}
	header('location: cart.php');
 ?>