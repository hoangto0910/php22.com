<?php
	$a = 5;
	$b = 2;
	if ($a == 0) {
		if ($b == 0) {
			echo "Phương trình vô số nghiệm";
		}else{
			echo "Phương trình vô nghiệm";
		}
	}else{
		$x = -$b/$a;
		echo "Nghiệm x = " . $x;
	}
?>