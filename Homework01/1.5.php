<?php
	$s = 0;
	$dem = 0;
	for ($i=0; $i <= 50; $i++) { 
		if ($i % 2 == 0 ) {
			$s += $i;
			$dem++;
		}
		if ($dem == 10) {
			break;
		}
	}
	echo "Tổng 10 số chẵn đầu tiên là S = " . $s;
?>
