
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
    <?php 
        session_start();
        if (isset($_SESSION['box'])) {
            $data = $_SESSION['box'];
        }
        if (isset($_GET['ID'])) {
            $ID = $_GET['ID'];
        }
        if (isset($_GET['NAME'])) {
            $NAME = $_GET['NAME'];
        }
        if (isset($_GET['PRICE'])) {
            $PRICE = $_GET['PRICE'];
        }
        // $_SESSION['show'][$ID]=[
        //     'ID'=>$ID,
        //     'NAME'=>$NAME,
        //     'PRICE'=>$PRICE,
        // ];
        // echo "<pre>";
        //     print_r($_SESSION['show']);
        // echo "</pre>";
        if (isset($_SESSION['show'])) {
            $data_show = $_SESSION['show'];
        }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
     ?>
    <div class="container mr-top">
        <table class="table table-bordered">
             <thead>
              <tr>
                  <th scope="col" colspan="6" class="text-center"></th>
                  <th scope="col" class="text-center bold"><a href="list.php">Tiếp Tục mua hàng</a></th>
              </tr>
             </thead>
              <tbody>
                <tr class="text-center">
                  <th scope="row" colspan="7" class="bold">Thông Tin Giỏ Hàng</th>
                </tr>
              <tr class="text-center">
                  <th scope="row">ID</th>
                  <td class="bold">TênSP</td>
                  <td class="bold">Số Lượng</td>
                  <td class="bold">Đơn Giá</td>
                  <td class="bold">Thành tiền</td>
                  <td class="bold">Thời gian cập nhật</td>
                  <td class="bold"></td>
              </tr>
           <!--  <?php 
                $i = 0;
                foreach ($data_show as $value) {
                    $i++;
                
               ?> -->
               
              
                <tr class="text-center">
                  <td class="bold"><?php echo $ID; ?></td>
                  <td class="bold"><?php echo $NAME; ?></td>
                  <td class="bold"><?php echo 1; ?></td>
                  <td class="bold"><?php echo $PRICE; ?></td>
                  <td class="bold"><?php echo $PRICE; ?></td>
                  <td class="bold"><?php echo date('d/m/Y - H:i:s'); ?></td>
                  <td class="bold"></td>
              </tr> 
            <!-- <?php 
                }
            ?>  -->
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