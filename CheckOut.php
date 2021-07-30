<?php
session_start();

?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
       $cart = $_SESSION['cart'];
       foreach ($cart as $cartItem){
           echo "id: " . $cartItem['id'].'<br/>';
           echo "so luong: " . $cartItem['quantity'];
       }
    //    echo "abc";
    //  Dua thang $cart vao bang orders
    
    // Chuyen huong sang trang Thank For Order
    // header("Location: http://localhost/webmuonsach/OrderSuccess.php");
    die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://mew-bs.mysapo.net/dist/css/checkout.min.css?v=bc5f183">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="wrap">
            <main class="main">
                <header class="main__header">
                    <div class="logo logo--left ">
                        <a href="/">
                        <img class="logo__image  logo__image--small " alt="Mew Electric" src="images/logosw.png">
                        </a>
                    </div>
                </header>
                <div class="main__content">
                    <article class="animate-floating-labels row">
                        <div class="col col--two">
                        <section class="section">
                            <div class="section__header">
                                <div class="layout-flex">
                                    <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                    <i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                    Thông tin nhận hàng
                                    </h2>
                                    <a href="./Login.php">
                                    <i class="fa fa-user-circle-o fa-lg"></i>
                                    <span>Đăng nhập </span>
                                    </a>
                                </div>
                            </div>
                            <?php 
                                require ('connect.php'); 
                                $query = "SELECT * FROM users ";
                                $request = $conn->query($query);
                            ?>
                            <form action="#" method="post">
                                <div class="group">
                                    <label for="name">Email</label>
                                    <input type="name" class="field__input" id="email" name="email">
                                </div>
                                <div class="group">
                                    <label for="name">Họ và Tên</label>
                                    <input type="name" class="field__input"  id="name" name="name">
                                </div>
                                <div class="group">
                                    <label for="name">Số Điện Thoại</label>
                                    <input type="name" class="field__input" id="phone" name="phone">
                                </div>
                                <div class="group">
                                    <label for="name">Địa Chỉ</label>
                                    <input type="name" class="field__input"  id="address" name="address">
                                </div>

                            </form>
                            
                        </section>
                        <div class="fieldset">
                            <h3 class="visually-hidden">Ghi chú</h3>
                            <div class="field " data-bind-class="{'field--show-floating-label': note}">
                                <div class="field__input-wrapper">
                                    <label for="note" class="field__label">
                                    Ghi chú (tùy chọn)
                                    </label>
                                    <textarea name="note" id="note" type="text" class="field__input" data-bind="note"></textarea>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col col--two">
                        <section class="section">
                            <div class="section__header">
                                <div class="layout-flex">
                                   
                                </div>
                            </div>
                            <div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList" data-define="{isAddressSelecting: false, shippingMethods: []}">
                                <div class="alert alert--loader spinner spinner--active hide" data-bind-show="isLoadingShippingMethod">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                    </svg>
                                </div>
                                
                                
                                <div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
                                    Vui lòng nhập thông tin giao hàng
                                </div>
                            </div>
                        </section>
                        
                        </div>
                    </article>
                    
                </div>
            </main>
            <aside class="sidebar">
                <div class="sidebar__header">
                    <h2 class="sidebar__title">
                        Đơn hàng 
                    </h2>
                </div>
                <div class="sidebar__content">
                    <div id="order-summary" class="order-summary order-summary--is-collapsed">
                        <div class="order-summary__sections">
                        <div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                        <?php 
                                if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
                                    echo 'Giỏ hàng rỗng. Vui lòng chọn Sản phẩm . <a href="./BookLoanPage.php">Bấm vào đây để quay về mượn sách</a>!';
                                    die;
                                }
                            ?>
                            <table class="product-table">
                                <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                                <thead class="product-table__header">
                                    <tr>
                                    <th>
                                        <span >Ảnh sản phẩm</span>
                                    </th>
                                    <th>
                                        <span>Mô tả</span>
                                    </th>
                                    <th>
                                        <span>Sổ lượng</span>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($_SESSION['cart'] as $x => $x_value) {
                                        require('connect.php');
                                        $query = "SELECT * FROM books  WHERE id= $x ;";
                                        $book  = $conn->query($query);

                                        if ($book->num_rows > 0) {
                                            while ($row = $book->fetch_assoc()) { ?>
                                    <tr class="product">
                                    <td class="product__image">
                                        <div class="product-thumbnail">
                                            <div class="product-thumbnail__wrapper" >
                                                <img src=" uploads/<?php echo  $row['img'] ?>" alt="" class="product-thumbnail__image">
                                            </div>
                                            <span class="product-thumbnail__quantity"> <?php echo $x_value?></span>
                                        </div>
                                    </td>
                                    <th class="product__description">
                                        <span class="product__description__name">
                                            <?php echo $row['booktitle'] ?>
                                        </span>
                                    </th>
                                    <td class="product__quantity visually-hidden"><em>Số lượng:</em>  <?php echo $x_value?></td>
                                    <td class="product__price">
                                    <?php
                                        echo array_sum($_SESSION['cart']);
                                    ?>
                                    </td>
                                    </tr>
                                    <?php }
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element" id="orderSummary">
                            <table class="total-line-table">
                            <?php
                                   
                                        require('connect.php');
                                        $query = "SELECT * FROM books  WHERE id= $x ;";
                                        $book  = $conn->query($query);

                                        
                                            ?>
                                <caption class="visually-hidden">Tổng giá trị</caption>
                                <thead>
                                    <tr>
                                    <td><span class="visually-hidden">Mô tả</span></td>
                                    <td><span class="visually-hidden">Giá tiền</span></td>
                                    </tr>
                                </thead>
                                
                                <tfoot class="total-line-table__footer">
                                    <tr class="total-line payment-due">
                                        <th class="total-line__name">
                                            <span class="payment-due__label-total">
                                            Tổng cộng
                                            </span>
                                        </th>
                                    <td class="total-line__price">
                                        <span class="payment-due__price" > <?php echo array_sum($_SESSION['cart']);?> Quyển Sách</span>
                                    </td>
                                    </tr>
                                </tfoot>
                               
                            </table>
                        </div>
                        <div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                            <form method="POST">
                            <button type="submit" class="btn btn-checkout spinner" data-bind-class="{'spinner--active': isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                
                                <!-- <span class="spinner-label">
                                        <a href="./OrderSuccess.php" style="color: white"> ĐẶT HÀNG (MƯỢN)</a>
                                </span> -->
                                Dat hang
                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                </svg>
                                </button>
                            </form>
                            <a href="./cartDetail.php" class="previous-link">
                            <i class="previous-link__arrow">❮</i>
                            <span class="previous-link__content">Quay về giỏ hàng</span>
                            </a>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>


