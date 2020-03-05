<?php
	$name = "&nbsp&nbsp vu vAn thuOng &nbsp&nbsp";
	// echo "Chuỗi ban đầu : " . $name . "<br>";
	// function chuanhoachuoi($name){
	// 	strtolower($name);
	// 	ucwords($name);
	// 	trim($name);
	// }
	$name = strtolower($name);
	$name = ucwords($name);
	$name = trim($name, "&nbsp&nbsp");
	echo "Chuỗi sau khi chuẩn hóa : " . $name;
	// $name_ex = explode(" ", $name);
	// for ($i=0; $i < (count($name_ex)); $i++) { 
	// 	if ($name_ex[0] = " ") {	
	// 	}
	// }
?>