<!DOCTYPE html>
<html>
<head>
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
        <h3 align="center">DevMind - Education And Technology Group</h3>
        <h3 align="center">Edit Category</h3>
        <hr>
        <?php
            if (isset($_COOKIE["msg"])) {
                ?>
                <div class="alert alert-success" role="alert">
                    <strong>Fail !!!</strong>
                    <?php
                    echo $_COOKIE["msg"];
                    ?>
                </div>
                <?php 
            }
            ?>
        <form action="/Homework/php22.com/ex10/index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $category['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?php echo $category['parent_id'] ?>">
            </div>
            <!-- <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div> -->
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $category['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>