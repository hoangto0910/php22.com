<?php
	$string = "ZenttneZ";
	$rev = strrev($string);
	echo "chuỗi ban đầu : " .$string . ".";
	echo "<br>Chuỗi đảo sau khi đảo ngược : " .$rev . ".";
	if ($string == $rev) {
		echo "<br>". $string . " : " . " Là chuỗi Padindrome" . ".";
	}else{
		echo "<br>". $string . " : " . " Không phải là chuỗi Palindrome" . ".";
	}
?>