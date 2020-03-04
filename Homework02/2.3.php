<?php
	$arr = array(1,4,2,6,9,100,4);
	echo "Mảng Lúc đầu";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	sort($arr);
	echo "<br>Mảng sau khi sắp xếp";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
?>