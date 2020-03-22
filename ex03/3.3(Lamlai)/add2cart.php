<?php
	require_once "data.php";
	if (isset($_GET['msp'])) {
		$msp = $_GET['msp'];
	}
	if (isset($_SESSION['products'][$msp])) {
		$_SESSION['products'][$msp]['SoLuong'] += 1;
	}else{
		$cart_product = $products[$msp];
		$cart_product['SoLuong'] = 1;
		$_SESSION['products'][$msp] = $cart_product;
	}
	header('location: cart.php');
	
 ?>