<?php 
	require "connect.php";
    require "helper.php";
    $users = getUsers($conn);
    $categories = getCategories($conn);
	// Lấy hết dữ liệu của $users vaf $categories đổ vào select option;
	//users 
	// $query_users = "SELECT * FROM users";
	// $result_users = $conn->query($query_users);
	// $users = array();
	// while ($row = $result_users->fetch_assoc()) {
	// 	$users[] = $row; // mỗi key của users là 1 giá trị mảng;
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New post</h3>
    <hr>
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <textarea name="content" class="form-control" id="summernote" cols="30" rows="10"></textarea>
            </div>
            <!-- <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div> -->
            <div class="form-group">
                <label for="">User</label>
                <select name="user_id" id="" class="form-control">
                	<?php foreach($users as $user) {?>
                		<option value="<?php echo $user['id'] ?>"><?php echo $user['name'] ?></option>
                	<?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Danh muc</label>
                <select name="category_id" id="" class="form-control">
                	<?php foreach($categories as $category) {?>
                		<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                	<?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
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