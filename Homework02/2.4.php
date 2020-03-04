<?php
	$string = "ZenttneZ";
	$rev = strrev($string);
	echo "chuỗi ban đầu : " .$string;
	echo "<br>Chuỗi đảo ngược : " .$rev;
	if ($string == $rev) {
		echo "<br>". $string . " : " . " La chuoi Padindrome";
	}else{
		echo "<br>". $string . " : " . " Không phải là chuỗ Palindrome";
	}
?>