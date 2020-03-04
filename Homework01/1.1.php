<?php
	$a = 3;
	$b = 12;
	$c = 5;
	$delta = $b * $b - 4 * $a * $c;
	if ($a == 0) {
		if ($b == 0) {
			if ($c == 0) {
				echo "Phương trình có vô số nghiệm";
			}else{
				echo "Phương trình vô nghiệm";
			}
		}else{
			echo "Phương trình có 1 nghiệm x = " . -$c/$b;
		}
	}else{
		if ($delta < 0) {
			echo "Phương trình vô nghiệm";
		}elseif ($delta == 0) {
			echo "Phương trình có nghiệm kép x1=x2= " . -$b/2*$a;
		}else{
			echo "Phương trình có 2 nghiệm phân biệt <br>";
			echo "x1 = " . $x1 = (-$b + sqrt($delta))/(2*$a) . "<br>";
			echo "x2 = " . $x2 = (-$b - sqrt($delta))/(2*$a);
		}
	}
?>
