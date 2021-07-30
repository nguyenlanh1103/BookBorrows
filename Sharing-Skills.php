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
            --menuWidth: 260px;
            --leftColBackground: #fff;
            --lightLeftColBackground: #2d343a;
            --darkLeftColBackground: #22272b;
            --mainColor: #ff5e0a;
            --accentColor1: #929292;
            --accentColor2: #d80000;
            --textColor: #4c4c4c;
        }
    </style>
</head>
<body>
    <?php require_once('Header.php'); ?>
    
    <div class="col-right">
        <div class="contentWarp">
            <div class="breadcrumbs position-relative pl-4 pr-4 pt-4 pb-4 lazy_bg loaded" data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/breadcrumb.jpg?1617700723079)" style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/breadcrumb.jpg?1617700723079&quot;);">
                <div class="inner position-relative text-center">
                    <h1 class="cat-heading d-none d-md-block">Tin tức</h1>
                    <ul class="breadcrumb align-items-center justify-content-center m-0">
                    <li class="home">
                        <a href="index.php" title="Mew BS">Trang chủ</a>						
                        <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/right-arrow.png?1617700723079" alt="Mew BS">
                    </li>
                    <li class="font-weight-bold">Tin tức</li>
                    </ul>
                </div>
            </div>
            <section class="blog-layout" itemscope="" itemtype="http://schema.org/Blog">
                <?php 
                    require ('connect.php'); 
                    $query = "SELECT * FROM books  WHERE category_id=7;";
                    $book  = $conn->query($query);
                ?>
                <div class="container">
                    <div class="col-main pt-5 pb-4">
                    <article class="row">
                    <?php foreach ($book as $row){?>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-xl-3">
                            <div class="item_grid mb-4">
                                <div class="img_thm position-relative">
                                <a href="/review-sach-xa-ngoai-kia-noi-loai-tom-hat-cua-delia-owens" title="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens" class="effect-ming">
                                    <div class="position-relative w-100 m-0 be_opa modal-open">
                                        <img src="uploads/<?php echo $row['img']?>"  class="lazy loaded" >
                                        <div class="position-absolute w-100 h-100 overlay"></div>
                                    </div>
                                </a>
                                <div class="entry-date position-absolute text-center rounded-right" style="background-color:#ff6600";>
                                    <p class="day font-weight-bold">
                                        24
                                    </p>
                                    <p class="yeah">
                                        02/2021
                                    </p>
                                </div>
                                </div>
                                <div class="cont">
                                    <h3 class="title_blo font-weight-bold mt-2"><a class="line_1" href="" title="<?php echo $row['booktitle']?>"><?php echo $row['booktitle']?></a></h3>
                                    <div class="sum line_1 line_3 h-auto">
                                        <?php echo $row['detail']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </article>
                    <ul class="pagination d-flex justify-content-center clearfix mt-4 mb-3">
                        <?php 
                           
                        ?>
                        <li class="page-item"><a class="page-link rounded-0 text-center" href="Sharing-Skills.php?page1" title="1">«</a></li>
                        <li class="page-item active disabled"><a class="page-link rounded-0 text-center" href="#" style="pointer-events:none">1</a></li>
                        <li class="page-item"><a class="page-link rounded-0 text-center" href="Tin-Tuc.php?page=2">2</a></li>
                        <li class="page-item"><a class="page-link rounded-0 text-center" href="Tin-Tuc.php?page=2" title="2">»</a></li>
                    </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <?php require_once('Footer.php');?>
</body>
</html>

