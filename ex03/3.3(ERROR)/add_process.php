<?php 
	if (isset($_POST['ID'])) {
		$ID = $_POST['ID'];
	}
	if (isset($_POST['NAME'])) {
		$NAME = $_POST['NAME'];
	}
	if (isset($_POST['PRICE'])) {
		$PRICE = $_POST['PRICE'];
	}
	session_start();
	$_SESSION['box'][$ID]=[
		'ID'=>$ID,
		'NAME'=>$NAME,
		'PRICE'=>$PRICE,
	];
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	header('location: list.php');
 ?>