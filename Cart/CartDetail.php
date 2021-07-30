<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
    <!-- <link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" > -->
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/376/967/themes/751286/assets/mewint_css.scss.css?1617247297894">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/376/967/themes/751286/assets/cart_style.scss.css?1617766164168">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">

    <title>Document</title>
</head>

<body>
    <?php require_once('../Header.php'); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="inner">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="../index.php" title="Trang Chủ">
                            <span>Trang chủ</span>
                        </a>
                        <span>
                            <img src="./images/right-arrow.png" alt="logo Index">
                        </span>
                    </li>
                    <li>
                        <strong>giỏ hàng</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="wrap_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title_head left after">
                        <span>Giỏ Hàng Của Bạn</span>
                    </h1>
                    <div class="header-cart title_cart_pc hidden-sm hidden-xs">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container hidden-xs hidden-sm">
            <div class="col-main cart_desktop_page cart-page">
                <div class="cart page_cart hidden-xs hidden-sm row">

                    <form action="" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                        <div class="bg-scroll">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-primary text-center">
                                        <th>ID</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($_SESSION['cart'] as $x => $x_value) {
                                        require('../connect.php');
                                        $query = "SELECT * FROM books  WHERE id= $x ;";
                                        $book  = $conn->query($query);

                                        if ($book->num_rows > 0) {
                                            while ($row = $book->fetch_assoc()) { ?>
                                                <tr style="text-align: center;">
                                                    <td> <?php echo $x ?> </td>
                                                    <td>
                                                        <?php echo "<img width='75' src='../images/". $row['img'] ."'>" ?>
                                                    </td>
                                                    <td> <?php echo $row['booktitle'] ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                        <form action="./add.php?id=<?php echo $row["id"]; ?>&quantity=<?php echo $x_value?>" method="post" enctype="multipart/form-data" id="add-to-cart-form" class="border-top">
                                                                <input type='number' name='quant[<?php echo $row["id"];?>]' class='form-control input-number' value="<?php echo $x_value?>" min='1' max='20'>
                                                                <button type="submit">Submit</button>
                                                        </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="./delete.php?=<?php echo $row["id"] ?>" class="remove-itemx remove-item-cart" title="Xóa">
                                                            <span class="class">
                                                                <img src="../images/error.png" alt="img">
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="col-lg-12 col-md-12">
                        <div class="f-left section continued">
                            <a href="./BookLoanPage.php" class="form-cart-continue">Tiếp tục mua hàng</a>
                        </div>
                        <div class="row f-right">
                            <div class="col-lg-10 col-md-10 col-lg-8 col-md-8">
                                <div class="section bg_cart shopping-cart-table-total">
                                    <div class="table-total">
                                        <div class="progress js-free-shipping" data-value="15000000">
                                            <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            <span class="free-shipping-content js-free-shipping-text"><span class="white">Đơn hàng được miễn phí vận chuyển<span></span></span></span>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="total-text">Tổng Sách Đã Mượn</td>
                                                    <td class="txt-right totals_price price_end a-right"><?php
                                                                                                            echo array_sum($_SESSION['cart']);
                                                                                                            ?> Quyển Sách</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="../CheckOut.php" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('../Footer.php'); ?>



</body>

</html>