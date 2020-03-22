<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php session_start(); ?>
	<div class="container">
		<h2 class="text-center">--DOCUMENTS--</h2>
		<div class="container">
			<a href="upload.php" class="btn btn-success">Up Load Document</a>
			<?php
				if (isset($_COOKIE['msg'])) {
			 ?>
			 <div class="alert alert-success" role="alert">
			 	<strong>SUCCESS!!</strong>
			 	<?php echo $_COOKIE['msg']; ?>
			 </div>
			<?php } ?>
			<table class="table">
				<thead>
					<tr>
						<th width="10%">No</th>
						<th width="30%">Name</th>
						<th width="30%">Download</th>
						<th width="30%">#</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($_SESSION['documents'] as $key => $document) { ?>
						<tr>
							<td><?php echo $key; ?></td>
							<td><?php echo $document['name']; ?></td>
							<td><a href="dowload.php?name=<?php echo $document['file_name'] ?>" class="btn btn-success">Dowload</a></td>
							<td><a href="delete.php?mtl=<?php echo $key ?>" class="btn btn-danger">Remove</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</body>
</html>