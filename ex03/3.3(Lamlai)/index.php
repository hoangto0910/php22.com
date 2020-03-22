<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 	require_once "data.php"; ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS--</h2>
		<div class="container">
			<a href="cart.php" class="btn btn-success">View Cart >>></a>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>SanPham</th>
						<th>DonGia</th>
						<th>So Luong</th>
						<th>Hanh Dong</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $key => $product) {?>
						<tr>
							<td><?php echo $product['MaSp'] ?></td>
							<td><?php echo $product['TenSp']; ?></td>
							<td><?php echo number_format($product['DonGia']); ?></td>
							<td><?php echo $product['SoLuong']; ?></td>
							<td><a href="add2cart.php?msp=<?php echo $product['MaSp'] ?>" class="btn btn-success">Add to cart</a></td>
						</tr>
					<?php 	} ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>