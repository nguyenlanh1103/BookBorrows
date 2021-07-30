<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./swiper/css/bootstrap_css.css">
    <link rel="stylesheet" href="./swiper/css/bootstrap-4-3-min.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/ideal-image-slider.css">
    <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
	<link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" rel="stylesheet" >
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
 
    <link rel="stylesheet" href="https://hocwebgiare.com/thiet_ke_web_chuan_demo/Bootsnav/css/bootsnav.css"> 
</head>
<body>
<?php require_once('./Header.php'); ?>
<form action="" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
   <div class="bg-scroll">
      <table id="example2" class="table table-bordered table-hover">
         <thead>
            <tr class="bg-primary text-center">
                <th>ID</th>
                <th>Mã Đơn Hàng</th>
                <th>Ngày lập</th>
                <th>Ngày Giao</th>
                <th>Địa Chỉ</th>
                <th>Số Sách Đã Mượn</th>
                <th>TT Thanh Toán</th>
                <th>TT vận Chuyển</th>
            </tr>
         </thead>
         <tbody>
            <?php
              
                   require('connect.php');
                   $query = "SELECT * FROM order_items  WHERE id=".$id;
                   $book  = $conn->query($query);
               
                   if ($book->num_rows > 0) {
                       while ($row = $book->fetch_assoc()) { ?>
            <tr style="text-align: center;">
                <td> <?php echo $id ?> </td>
                <td> <?php echo $id_dh ?> </td>
                <td>
                    <?php echo $row['dateset'] ?>
                </td>
                <td> <?php echo $row['deliverydate'] ?></td>
                <td>
                    <?php echo $row['placeofdelivery'] ?>
                </td>
                <td>
                    <?php echo $row['numberborrowed'] ?>
                </td>
                <td>
                    <?php echo $row['shippingstatus'] ?>
                </td>
            </tr>
            <?php }
            }
            ?>
            </tbody>
        </table>
    </div>
</form>

<?php require_once('Footer.php'); ?>
</body>
</html>