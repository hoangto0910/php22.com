<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="3.2.css">
</head>
<body>
  <?php 
    session_start();
    if (isset($_SESSION['info'])) {
      $data_arr = $_SESSION['info'];
    }
  ?>
    <div class="container">
        <h1 align="center" class="mr_top size_header">Danh Sách Người Dùng</h1>
        <a href="add.php"><button type="submit" class="btn btn-primary">Thêm mới</button></a>
        <?php
          if (isset($_COOKIE["msg"])) {
        ?>
        <div class="alert alert-success" role="alert">
          <strong>Success!!</strong>
          <?php
            echo $_COOKIE["msg"]; 
           ?>
        </div>
        <?php 
          }
         ?>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mã Sinh Viên</th>
                  <th scope="col">Họ Tên</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $i = 0;
                foreach ($data_arr as $value) {
                  $i++;
              ?>
      
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $value['ID']; ?></td>
                  <td><?php echo $value['NAME']; ?></td>
                  <td>
                    <a href="detail.php?ID=<?php echo $value['ID']?>"><button type="button" class="btn btn-success mr-right">Detail</button></a><a href="delete.php?ID=<?php echo $value['ID']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
            </tbody>
        </table>
    </div>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstra  p/3.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>