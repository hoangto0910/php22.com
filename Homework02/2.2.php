<?php
	$arr = array(1,2,4,6,9,100,4);
	$arr_rv = array_reverse($arr, true);
	echo "Mảng ban đầu : ";
	foreach ($arr as $key => $value) {
		echo $value . ",";
	}
	echo "<br> Mảng sau khi đảo ngược : ";
	foreach ($arr_rv as $key => $value) {
		echo $value . ",";
	}
?>