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
	<?php 	require_once "products.php"; ?>
	<div class="container">
		<h2 class="text-center">--PRODUCTS--</h2>
		<div class="container">
			<a href="cart.php" class="btn btn-success">View Cart >>></a>
			<table class="table">
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Price</th>
						<th>Quality</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $key => $product) {?>
						<tr>
							<td><?php echo $product['MaSp'] ?></td>
							<td><?php echo $product['TenSp']; ?></td>
							<td><?php echo number_format($product['GiaTien']); ?></td>
							<td><?php echo $product['SoLuong']; ?></td>
							<td><img src="<?php echo $product['Anh'] ?>" width="10%" height="5%" alt=""></td>
							<td><a href="add2cart.php?msp=<?php echo $product['MaSp'] ?>" class="btn btn-success">Add to cart</a></td>
						</tr>
					<?php 	} ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>