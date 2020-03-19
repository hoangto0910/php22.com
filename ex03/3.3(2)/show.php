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
  <link rel="stylesheet" href="3.3.css">
  <style>
    *{
      font-size: 20px !important;
    }
    
  </style>
</head>
<body>
  <div class="container mr-top">
    <table class="table table-bordered">
     <thead>
      <tr>
        <th scope="col" colspan="3" class="text-center"><b>DANH SÁCH SẢN PHẨM</b></th>
        <th scope="col" class="text-center"><a href="giohang.php">Xem Giỏ Hàng</a></th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td class="bold">ID</td>
        <td class="bold">Tên Sản Phẩm</td>
        <td class="bold">Đơn Giá</td>
        <td class="bold">Hành Động</td>
      </tr>       
      <tr class="text-center">
        <td class="bold">
          <?php 
          $ID = "SP01";
          echo $ID;
          ?>
        </td>
        <td class="bold"><?php $NAME = "ZentPhone"; echo $NAME; ?></td>
        <td class="bold"><?php $PRICE = 10000000; echo $PRICE; ?></td>
        <td class="bold"><a href="giohang.php?ID=<?php echo $ID ?>&NAME=<?php echo $NAME ?>&PRICE=<?php echo $PRICE ?>">Add to card</a></td>
      </tr>
      <tr class="text-center">
        <td class="bold">
          <?php 
          $ID = "SP02";
          echo $ID;
          ?>
        </td>
        <td class="bold"><?php $NAME = "ZentPad"; echo $NAME; ?></td>
        <td class="bold"><?php $PRICE = 1000000; echo $PRICE; ?></td>
        <td class="bold"><a href="giohang.php?ID=<?php echo $ID ?>&NAME=<?php echo $NAME ?>&PRICE=<?php echo $PRICE ?>">Add to card</a></td>
      </tr>
      <tr class="text-center">
        <td class="bold">
          <?php 
          $ID = "SP03";
          echo $ID;
          ?>
        </td>
        <td class="bold"><?php $NAME = "IPhone XS"; echo $NAME; ?></td>
        <td class="bold"><?php $PRICE = 2000000; echo $PRICE; ?></td>
        <td class="bold"><a href="giohang.php?ID=<?php echo $ID ?>&NAME=<?php echo $NAME ?>&PRICE=<?php echo $PRICE ?>">Add to card</a></td>
      </tr>
      <tr class="text-center">
        <td class="bold">
          <?php 
          $ID = "SP04";
          echo $ID;
          ?>
        </td>
        <td class="bold"><?php $NAME = "Nokia"; echo $NAME; ?></td>
        <td class="bold"><?php $PRICE = 500000; echo $PRICE; ?></td>
        <td class="bold"><a href="giohang.php?ID=<?php echo $ID ?>&NAME=<?php echo $NAME ?>&PRICE=<?php echo $PRICE ?>">Add to card</a></td>
      </tr>       
    </tbody>
  </table>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>