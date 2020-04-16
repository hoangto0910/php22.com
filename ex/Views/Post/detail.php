<?php 
	$post['content'] = htmlspecialchars($post['content']);
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h3 class="text-center">--Thông tin chi tiết---</h3>
 		<ul>
 			<li>Id : <?php echo $post['id'] ?></li>
 			<li>Title : <?php echo $post['title'] ?></li>
 			<li>Description : <?php echo $post['description'] ?></li>
 			<?php if (isset($post['thumbnail'])) {?>
 				<li>Thumbnail : <?php echo $post['thumbnail'] ?></li>
 			<?php } ?>
 			<li>Content : <?php echo $post['content'] ?></li>
 			<li>Slug : <?php echo $post['slug'] ?></li>
 			<li>User : <?php echo $post['user']['name'] ?></li>
 			<li>Danh mục : <?php echo $post['category']['name'] ?></li>
 		</ul>
 		<a href="/Homework/php22.com/ex/index.php?mod=post&act=list" class="btn btn-primary">Back</a>
 	</div>
 </body>
 </html>