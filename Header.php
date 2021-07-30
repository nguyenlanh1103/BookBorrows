<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/376/967/themes/751286/assets/mewint_css.scss.css?1617247297894">  -->
    <!-- <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/818624/assets/main.scss.css?1620009248327"> -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
      .flex-box{
         display: flex;
         justify-content: flex-end;
      }
      .mini-cart a img{
         max-width: 40px;
      }
    </style>
    
   
</head>
<body>

<div id="header" style="background: linear-gradient(-61deg, #f37102 0%, #ba0000 70%);">
<!-- mobile-menu -->
      <div class="container mb_c">
         <div class="row">
            <div class="container"> 
               <div class="text-center"> 

               </div> 
               <div class="row"> 
                  <div class="col-mx-1" style="position: relative;"> 
                     <nav class="navbar navbar-default navbar-mobile bootsnav on" style="position: relative; z-index: 300;"> 
                     <div class="navbar-header"> 
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> 
                     </button> 
                     </div> 
                     <div class="collapse navbar-collapse" id="navbar-menu"> 
                     <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align:center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial">HOCWEBGIARE.COM</div><div class="menu-icon"><span>Menu</span></div> 
                        <li><a href="./index.php" title="Học thiết kế web giá rẻ">Trang chủ</a></li> 
                        <li><a href="./Gioi-Thieu.php" title="Học thiết kế web giá rẻ">Giới thiệu</a></li> 
                        <li><a href="Sharing-Skills.php" class="class"> Chia Sẻ Kĩ Năng</a></li> 
                        <li><a href="#" class="class"> Hệ Thống Cửa Hàng Phân Phối</a></li>
                        <li><a href="Lien-He.php" class="class"> Liên Hệ</a></li> 
                        
                        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Danh sách Các Loại Sách</a> 
                           <ul class="dropdown-menu animated"> 
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm Ưa Chuộng</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm Nổi Bật</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Văn Học Nổi Tiếng</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sách Kĩ Năng Sống</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sách Maketing Và Bán Hàng</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sách Nuôi Dạy Con</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin Tức - Sự kiện</a> </li>
                              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Chia Sẻ Kĩ Năng</a> </li>
                           </ul> 
                        </li> 
                     </ul> 
                     </div> 
                     </nav> 
                  </div> 
               </div> 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 z-indexlogo_99">
               <div class="logo">
                  <a href="/" title="Mew header">
                     <img src="images/logosw.png" alt="Mew Electric" >
                  </a>
               </div>
               
               <!-- <div class="hidden-desktop" id="mobile-menu">
                  <div class="navmenu">
                     <div class="menutop">
                        <div class="toggle">
                           <div class="line_mn">
                              <span class="icon-bar"></span> 
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 z-indexlogo bv pd_left_cl">
               <div class="search-box text-left">
                  <form action="Search.php" method="get" id="search_mini_form">
                     <input type="text" class="timkiem" value maxlength="70" name="search" id="search" placeholder="Nhập từ khóa tìm kiếm...">
                     <button class="btn  search-btn-bg" name="query">
                        <img src="images/search.png" alt="Tìm kiếm"  >
                        
                     </button>
                  </form>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 mobi_bt vf">
               <div class="search-box text-right">
                  <div class="fix-cart">
                     <div class="sup hidden-xs hidden-sm">
                        <a href="tel:0975997736" class="hv_x" title="Tư vấn bán hàng">
                        <img class="lazy" src="./images/telephone.png"  alt="Tư vấn bán hàng">
                           0975997736
                        </a>
                        <span>Tư vấn bán hàng</span>
                     </div>
                     <div class="top-cart-contain pull-right">
                     <!-- Top Cart -->
                     <div class="mini-cart">
                        <div class="basket dropdown-toggler">
                           <a href="./Cart/CartDetail.php" title="Giỏ hàng">
                              <img src="./images/cart.png" alt="Giỏ hàng">
                              <div class="cart-box bg-light">
                                 <?php 
                                    if (isset($_SESSION['cart']))
                                    {
                                       $count = count($_SESSION['cart']);
                                       echo"<span id='cart-total'><b class='text-warning bg-light'> $count</b></span> ";
                                    }
                                    else{
                                       echo"<span id='cart-total'><b class='text-warning bg-light'>0</b></span> ";
                                    }
                                 ?>
                                 
                              </div>
                           </a>
                        </div>
                     </div>
                  <div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>

</body>
</html>