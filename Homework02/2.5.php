
<?php
	$name = "Duong Vu Van Qua";
	$var_name = explode(" ", $name);
	echo "<pre>";
		print_r($var_name);
	echo "</pre>";	
	echo "Họ : " .$var_name[0]."<br>";
	$ten_dem = "";
	for ($i=1; $i < (count($var_name)-1); $i++) { 
		$ten_dem = $ten_dem . $var_name[$i] . " ";
	}
	echo "Đệm : " . $ten_dem . "<br>";
	echo "Tên : " .$var_name[(count($var_name)-1)];
?>