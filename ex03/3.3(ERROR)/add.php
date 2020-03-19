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
    <style>
        *{
            font-size: 20px !important;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form action="add_process.php" method="POST" role="form">
            <legend align="center"><h1><b>Thêm Hàng</b></h1></legend>
            
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập ID" name="ID">
            </div>
            
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập Tên sp" name="NAME">
            </div>

            <div class="form-group">
                <label for="">Đơn Giá</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập Đơn giá" name="PRICE">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
        </form>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>