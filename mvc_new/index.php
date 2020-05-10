<?php
	session_start();
	$mod = "home";
	$act = "index";
	// require_once "Views/backend/blank.php";
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];
	}
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}
	$class_name = ucfirst($mod) . "Controller";
	$path = __DIR__ . "/Controllers/" . $class_name . ".php";
	if (!file_exists($path)) {
		echo "File $path not Found";
		exit();
	}
	require_once ($path);
	$controller_obj = new $class_name();
	if (!method_exists($controller_obj, $act)) {
		echo "Method $act Khong ton tai";
	}
	$controller_obj->$act();
 ?>