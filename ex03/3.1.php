<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		*{
			font-size: 20px !important;
		}
	</style>
</head>
<body>
	<div class="container">
		<legend align="center"><h1><b>ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</b></h1></legend>
		<h1 align="center">Thông Tin Sinh Viên</h1>
		<?php
			$ID = $_POST['ID'];
			$NAME = $_POST['NAME'];
			$PHONE = $_POST['PHONE'];
			$EMAIL = $_POST['EMAIL'];
			$GENDER = $_POST['GENDER'];
			$ADR = $_POST['ADR'];
		?>
		<ul>
			<li><?php echo "Mã Sinh viên : " . $ID; ?></li>
			<li><?php echo "Họ Tên : " . $NAME; ?></li>
			<li><?php echo "Số Điện Thoại : " . $PHONE; ?></li>
			<li><?php echo "Email : " . $EMAIL; ?></li>
			<li><?php echo "Giới Tính : " . $GENDER; ?></li>
			<li><?php echo "Địa chỉ : " . $ADR; ?></li>
		</ul>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>