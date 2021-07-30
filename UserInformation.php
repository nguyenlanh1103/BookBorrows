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
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/custom.scss.css?1620642172035">
    <style>
        :root {
            --mainColor: #ff5e0a;
        
        }
    </style>
    <title>Trang Thông Tin Người Dùng</title>
</head>
<body>
<?php require_once('Header.php') ?>
<?php require_once('Menu.php') ?>
<section class="signup layout-account pt-3 pb-3">
    <?php
        require ('connect.php'); 
        $query = "SELECT * FROM users WHERE id=2;";
        $book = $conn->query($query);?>
   <div class="container">
      <div class="row">
      <?php foreach ($book as $row){?>
         <div class="col-xs-12 col-sm-12 col-lg-4 bg-white account-action">
            <h5 class="font-weight-bold">Trang tài khoản</h5>
            <p>Xin chào, <span style="color: var(--mainColor);"><?php echo $row['username'] ?></span>!</p>
            <ul class="list-unstyled m-0">
               <li>
                  <a disabled="disabled" class="active"  title="Thông tin tài khoản">Thông tin tài khoản</a>
               </li>
               <li>
                  <a href="#" title="Đơn hàng của bạn">Đơn hàng của bạn</a>
               </li>
               <li>
                  <a href="#" title="Đổi mật khẩu">Đổi mật khẩu</a>
               </li>
               <li>
                  <a href="#" title="Sổ địa chỉ">Sổ địa chỉ (1)</a>
               </li>
               <li class="out mt-3 d-block text-center">
                  <a class="d-block p-2" href="./Logout.php" title="Đăng xuất">Đăng xuất</a>
               </li>
            </ul>
         </div>
         <div class="col-xs-12 col-sm-12 col-lg-8 account-info">
            <h1 class="font-weight-bold mt-0 sml" style="color: var(--mainColor);">Thông tin tài khoản</h1>
            <p class="mb-1"><b>Họ tên:</b><?php echo $row['username'] ?></p>
            <p class="mb-1"><b>Email:</b><?php echo $row['email'] ?></p>
            <p class="mb-1"><b>Điện thoại:</b> 0<?php echo $row['phone'] ?></p>
            <p class="mb-1"><b>Địa chỉ:</b><?php echo $row['address'] ?></p>
         </div>
         <?php }?>
      </div>
   </div>
</section>
<?php require_once('Footer.php');?>
</body>
</html>