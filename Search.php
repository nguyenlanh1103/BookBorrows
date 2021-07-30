<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bootstrap-4-3-min.css?1616141527684">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679">
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
   <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/noindex.scss.css?1617700723079">
   <style>
        :root {
            --mainColor: #ff5e0a;
        }
    </style>
</head>
<body>
<?php require_once('Header.php') ?>
<div class="contentWarp">
<?php
            require("connect.php");
            if (isset($_REQUEST['query'])) 
            {
                $search = addslashes($_GET['search']);
                if (empty($search)) {
                    echo "Yêu cầu nhập dữ liệu vào ô trống";
                } 
                else
                {
                    $query = "SELECT * FROM books WHERE booktitle LIKE '%$search%'";
                    $conn = mysqli_connect("localhost", "root", "", "qlythuviensach");
                    $result = $conn->query($query);
                    $num = mysqli_num_rows($result);
                    if ($num > 0 && $search != "") 
                    {         
        ?>
   <div class="breadcrumbs position-relative pl-4 pr-4 pt-4 pb-4 lazy_bg loaded" >
      <div class="inner position-relative text-center">

         <h1 class="cat-heading d-none d-md-block">Tìm kiếm</h1>
         <ul class="breadcrumb align-items-center justify-content-center m-0">
            <li class="home">
               <a href="index.php" title="SachWeb">Trang chủ</a>						
               <img src="./images/right-arrow.png" alt="Sachweb">
            </li>
            <li class="font-weight-bold"><?php echo "Kết quả tìm kiếm với từ khóa " .$search;?></li>
         </ul>
      </div>
   </div>
   <section class="search-layout" style="min-height: 350px">
      <div class="container">
         <div class="category-products position-relative mt-4 mb-4">
            <h3><?php echo " Có $num kết quả tìm kiếm với từ khóa <h2>$search</h2>"; ?></h3>
            <div class="row slider-items">
            <?php  while ($row = $result->fetch_array()) {?>
               <div class="col-xl-3 col-lg-4 col-md-4 col-sm-3 col-6 product-grid-item-lm">
                  <div class="product-item position-relative modal-open">
                     <div class="sale-label sale-top-right position-absolute"><span class="font-weight-bold">-
                        5% 
                        </span>
                     </div>
                     <a href="" class="thumb d-block" title="<?php echo $row['booktitle']?>">
                        <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                           <img src="uploads/<?php echo $row['img']?>" class="d-block img img-cover position-absolute lazy loaded" >
                        </div>
                     </a>
                     <div class="item-info mt-1 position-absolute text-center">
                        <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href=""><?php echo $row['booktitle']?></a></h3>
                        <div class="item-price mb-1">
                           <span class="special-price font-weight-bold">Trạng Thái: <?php echo $row['quantity']?> Quyển</span>
                           <del class="old-price">100 Quyển</del>
                        </div>
                        <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="#" title="Chi tiết">Chi tiết</a>
                     </div>
                  </div>
               </div>
            <?php }?>
            </div>
         </div>
         <?php 
    } 
    else {
        echo "KHÔNG TÌM THẤY KẾT QUẢ TƯƠNG ỨNG!";
    }
    }
    }
    $conn->close();
    ?>
      </div>
   </section>
  
</div>
<?php require_once('Footer.php');?>
</body>
</html>

