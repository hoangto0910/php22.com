<?php
	$arr = array(1,2,4,6,9,100,4);
	$arr_rv = array_reverse($arr, true);
	echo "Mảng ban đầu";
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "<br> Mảng sau khi đảo ngược";
	echo "<pre>";
		print_r($arr_rv);
	echo "</pre>";
?>