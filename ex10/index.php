<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];
	}
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}
	$class_name = ucfirst($mod) . "Controller";
	$path = __DIR__ . "/Controllers/" . $class_name . ".php";
	if (!file_exists($path)) {
		echo "File $path Không tồn tại";
		die();
	}
	require_once ($path);
	$controller_obj = new $class_name();
	if (!method_exists($controller_obj, $act)) {
		echo "MeThod $act() Không tồn tại";
		die();
	}
	$controller_obj->$act();
 ?>