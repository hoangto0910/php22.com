<?php
session_start();
if (isset($_GET['ID'])) {
	$ID = $_GET['ID'];
}
if (isset($_SESSION['info'])) {
	$data_arr = $_SESSION['info'][$ID];
}
?>
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
	<link rel="stylesheet" href="3.2.css">
</head>
<body>
	<div class="container">
		<h1 align="center" class="mr_top size_header">Thông tin chi tiết</h1>
	
		<ul>
			<li>Mã Sinh Viên : <?php echo $data_arr['ID'];?></li>
			<li>Họ Tên : <?php echo $data_arr['NAME'];?></li>
			<li>Số Điện Thoại : <?php echo $data_arr['PHONE'];?></li>
			<li>Email : <?php echo $data_arr['EMAIL'];?></li>
			<li>Giới Tính : <?php echo $data_arr['GENDER']?></li>
			<li>Địa chỉ : <?php echo $data_arr['ADR'];?></li>
		</ul>
		<a href="list.php" type="button" class="btn btn-success mr-right">Back</a>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstra  p/3.1.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>