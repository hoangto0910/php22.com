
<?php
	$name = "Luu Diec Phi";
	$var_name = explode(" ", $name);
	echo "<pre>";
		print_r($var_name);
	echo "</pre>";	
	echo "Họ : " .$var_name[0]."<br>";
	echo "Đệm : " .$var_name[1]."<br>";
	echo "Tên : " .$var_name[2];
?>