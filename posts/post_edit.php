<?php 
	$id = $_GET['id'];
	require "connect.php";
	require "helper.php";
	$query = "SELECT * FROM posts WHERE id = " . $id;
	$result = $conn->query($query);
	$post = $result->fetch_assoc();
	// print_r($post);
	// die();
	$users = getUsers($conn);
	$categories = getCategories($conn);
	//users 
	// $query_users = "SELECT * FROM users";
	// $result_users = $conn->query($query_users);
	// $users = array();
	// while ($row = $result_users->fetch_assoc()) {
	//  	$users[] = $row;
	// }

	//categories
	// $query_categories = "SELECT * FROM categories";
	// $result_categories = $conn->query($query_categories);
	// $categories = array();
	// while ($row = $result_categories->fetch_assoc()) {
	// 	$categories[] = $row;
	// }
 ?>
 <!DOCTYPE html>
<html>
<head>
    
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New post</h3>
    <hr>
        <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" value="<?php echo $post['id']?>" name="id">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <textarea name="content" class="form-control" id="summernote" cols="30" rows="10" data-content="<?php echo $post['content'] ?>"></textarea>
            </div>
            <!-- <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $post['slug'] ?>">
            </div> -->
            <div class="form-group">
                <label for="">user</label>
                <select name="user_id" id="" class="form-control">
                	<?php foreach($users as $user){ ?>
                		<option value="<?php echo $user['id'] ?>" <?php if ($user['id'] == $post['user_id']) {
                			echo "selected";
                		} ?>><?php echo $user['name'] ?></option>
                	<?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="category_id" id="" class="form-control">
                	<?php foreach($categories as $category){ ?>
                		<option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $post['category_id']) {
                			echo "selected";
                		} ?>><?php echo $category['name'] ?></option>
                	<?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
      $("#summernote").summernote('editor.pasteHTML',$("#summernote").data("content"));
  });
</script>
</html>