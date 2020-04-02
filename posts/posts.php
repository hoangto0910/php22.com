<?php 
	require "connect.php";
	$query = "SELECT * FROM posts";
	$result = $conn->query($query);
	$posts = array();
	while($row = $result->fetch_assoc()){
		$posts[] = $row;
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/plugin/databasic/summernote-ext-databasic.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <?php
            if (isset($_COOKIE["msg"])) {
            	?>
            	<div class="alert alert-success" role="alert">
            		<strong>Success !!!</strong>
            		<?php
            		echo $_COOKIE["msg"];
            		?>
            	</div>
            	<?php 
            }
            ?>
        <table class="table">
            <thead>
                <th class="text-center">ID</th>
                <th class="text-center">title</th>
                <th class="text-center">description</th>
                <th width="15%" class="text-center">Image</th>
                <th width="20%" class="text-center">Action</th>
            </thead>
            <tbody>
            	<?php foreach ($posts as $post): ?>
            		<tr>
            			<td><?php echo $post['id'] ?></td>
            			<td><?php echo $post['title']?></td>
            			<td><?php echo $post['description'] ?></td>
                        <td><img src="uploads/<?php echo $post['thumbnail'] ?>" alt="" width="100%" height="100px"></td>
            			<td>
            				<a href="post_detail.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Detail</a>
            				<a href="post_edit.php?id=<?php echo $post['id'] ?>" class="btn btn-success">Edit</a>
            				<a href="post_delete.php?id=<?php echo $post['id'] ?>" class="btn btn-danger">Delete</a>
            			</td>
            		</tr>
            	<?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/lang/summernote-vi-VN.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>