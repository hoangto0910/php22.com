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
					<th>Code</th>
					<th>Name</th>
					<th>Price</th>
					<th width="200px">Quality</th>
					<th>Amount</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<?php $sum = 0; ?>
				<?php foreach ($_SESSION['products'] as $key => $product) { 
						$sum += $product['GiaTien'] * $product['SoLuong'];
						$amount 
					?>
					<tr>
						<td><?php echo $product['MaSp']; ?></td>
						<td><?php echo $product['TenSp']; ?></td>
						<td><?php echo number_format($product['GiaTien']) ?>VND</td>
						<td>
							<a class="btn btn-success" href="add2cart.php?msp=<?php echo $product['MaSp'] ?>">+</a>
							<?php echo $product['SoLuong']; ?>
							<a class="btn btn-danger" href="delete.php?msp=<?php echo $product['MaSp'] ?>">-</a>
						</td>
						<td><?php echo number_format($product['GiaTien'] * $product['SoLuong']); ?></td>
						<td><img width="10%" height="5%" src="<?php echo $product['Anh'] ?>" alt=""></td>	
					</tr>

				<?php } ?>
			</tbody>
		</table>
		<h2>Tong Tien <?php echo number_format($sum); ?> VND</h2>
	</div>
</body>
</html>