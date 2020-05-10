
<?php 
	require_once "Views/backend/includes/notification.php";
	echo "User " . $_SESSION['user']['name'] . $_SESSION['user']['email'] . "da dang nhap";
 ?>
 <a href="/mvc_new/index.php?mod=auth&act=logout">Logout</a>