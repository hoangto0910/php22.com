<?php
	$arr = array(1,4,2,6,9,100,4);
	echo "Mảng Lúc đầu : ";
	foreach ($arr as $key => $value) {
		echo $value . ",";
	}
	sort($arr);
	echo "<br>Mảng sau khi sắp xếp : ";
	foreach ($arr as $key => $value) {
		echo $value . "," ;
	}
?>