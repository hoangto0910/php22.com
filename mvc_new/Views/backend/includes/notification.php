<?php 
if (isset($_COOKIE["error"])) {
	?>
	<div class="alert alert-danger toastrDefaultError" role="alert">
		<strong>Error !!!</strong>
		<?php
		echo $_COOKIE["error"]; 
		?>
	</div>
	<?php 
}
?>
<?php 
if (isset($_COOKIE["success"])) {
	?>
	<div class="alert alert-success toastrDefaultSuccess" role="alert">
		<strong>Success !!!</strong>
		<?php
		echo $_COOKIE["success"]; 
		?>
	</div>
	<?php 
}
?>