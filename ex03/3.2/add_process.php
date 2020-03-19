<?php
	if (isset($_POST['ID'])) {
		$ID = $_POST['ID'];
	}
	if (isset($_POST['NAME'])) {
		$NAME = $_POST['NAME'];
	}
	if (isset($_POST['PHONE'])) {
		$PHONE = $_POST['PHONE'];
	}
	if (isset($_POST['EMAIL'])) {
		$EMAIL = $_POST['EMAIL'];
	}
	if (isset($_POST['GENDER'])) {
		$GENDER = $_POST['GENDER'];
	}
	if (isset($_POST['ADR'])) {
		$ADR = $_POST['ADR'];
	}
	//luu thong tin vao Session
	session_start();
	// $_SESSION['ID'] = $ID;
	// $_SESSION['NAME'] = $NAME;
	// $_SESSION['PHONE'] = $PHONE;
	// $_SESSION['EMAIL'] = $EMAIL;
	// $_SESSION['GENDER'] = $GENDER;
	// $_SESSION['ADR'] = $ADR;

	// $info = array();
	// $info['ID'] = $ID;
	// $info['NAME'] = $NAME;
	// $info['PHONE'] = $PHONE;
	// $info['EMAIL'] = $EMAIL;
	// $info['GENDER'] = $GENDER;
	// $info['ADR'] = $ADR;
	// $_SESSION['student'] = $info;

	// $ID = array();
	// $ID['ID'] = $ID;
	// $ID['NAME'] = $NAME;
	// $ID['PHONE'] = $PHONE;
	// $ID['EMAIL'] = $EMAIL;
	// $ID['GENDER'] = $GENDER;
	// $ID['ADR'] = $ADR;
	// $_SESSION['student'] = $ID;

	$_SESSION['info'][$ID]=[
		'ID'=>$ID,
		'NAME'=>$NAME,
		'PHONE'=>$PHONE,
		'EMAIL'=>$EMAIL,
		'GENDER'=>$GENDER,
		'ADR'=>$ADR,
	];
	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
	setcookie("msg", "Thêm thành công !", time()+3);
	header('location: list.php');
?>