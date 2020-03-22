<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php session_start(); ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS IN CART--</h2>
		<a href="index.php" class="btn btn-success">BACK TO HOME</a>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Sanpham</th>
					<th>DonGia</th>
					<th width="200px">So luong</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $sum = 0; ?>
				<?php foreach ($_SESSION['products'] as $key => $product) { 
				$sum += $product['DonGia'] * $product['SoLuong'];
				$amount 
				?>
				<tr>
					<td><?php echo $product['MaSp']; ?></td>
					<td><?php echo $product['TenSp']; ?></td>
					<td><?php echo number_format($product['DonGia']) ?>VND</td>
					<td>
						<?php echo $product['SoLuong']; ?>
					</td>
					<td><a href="delete.php?msp=<?php echo $product['MaSp'] ?>" class="btn btn-danger">Remove</a></td>
				</tr>

				<?php } ?>
			</tbody>
		</table>
		<h2>Tong Tien <?php echo number_format($sum); ?> VND</h2>
	</div>
</body>
</html>