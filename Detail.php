<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
	<link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" rel="stylesheet" >
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_article.scss.css?1617700723079">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/818624/assets/quickviews_popup_cart.scss.css?1620009248327">
    <style>

        body {
            font-family: 'Quicksand', sans-serif;
        }
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
        .pomi-lo{
            border-top: 1px solid #dee2e6!important;
        }
        #article-comments .article-comment {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dotted #c9c8c5;
        }
       
    </style>
    <?php 
        require ('connect.php');
        error_reporting(0);
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO comments (username, email, comment)
                VALUE ('$username',' $email' ,' $comment')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script> alert('comment added successfully. ')</script>";
            }else{
                echo "<script> alert('comment does not add. ')</script>";
            }
        }
    ?>
</head>
    <title>Document</title>
</head>
<body class="customer-logged-in">
    <?php require_once('./Header.php') ?>
    <?php require_once('./Menu.php') ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    
    <div class="container">
    <?php 
        require('connect.php');
        $query = "SELECT * FROM books WHERE id = ".$_GET['id'];
        $result = $conn->query($query);
        $row = mysqli_fetch_assoc($result);
        $sql = $conn->query("SELECT comments FROM id");
       
        
    ?>
        <section class="product-layout product-layout2 pt-3">
            <div class="row clearfix">
           
                <div class="col-xl-9 col-lg-9 col-12 pt-4">
                    <div class="row clearfix">
                    <div class="product-layout_col-left col-12 col-sm-12 col-md-5 col-lg-5 col-xl-6 mb-3">
                        <div class="product-main-slide swiper-container mb-4 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                            <div class="swiper-wrapper" style="height: 730px;">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 483px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="uploads/<?php echo $row['img']; ?>">
                                    <source media="(min-width: 575px)" srcset="uploads/<?php echo $row['img']; ?>">
                                    <img src="uploads/<?php echo $row['img']; ?>" alt="Taurus" class="d-block m-auto">
                                </picture>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="product-thumb-slide swiper-container d-none swiper-container-initialized swiper-container-horizontal swiper-container-thumbs">
                            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                <div class="swiper-slide line_led modal-open">
                                <span class="span1"></span>
                                <span class="span2"></span>
                                <span class="span3"></span>
                                <span class="span4"></span>
                                <div class="position-relative w-100 m-0 ratio2by3 aspect">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo $row['img']; ?>" alt="<?php echo $row['booktitle']; ?>" class="d-block img position-absolute lazy w-100 h-100">
                                </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mew_slide_p"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    
                    <div class="product-layout_col-right col-12 col-sm-12 col-md-7 col-lg-7 col-xl-6 product-warp">
                   
                       
                        <h2 class="product-name font-weight-bold text-uppercase"><?php echo $row['booktitle']; ?></h2>
                        <div class="product-info position-relative">
                            Tình trạng:
                            <span class="inventory_quantity">Còn hàng</span>
                        </div>
                        <div class="product-info position-relative">Tác giả: <span id="vendor">Mew Zodiac</span></div>
                        <div class="product-info position-relative mb-3">Loại: <span id="type">Đang cập nhật...</span></div>
                        <div class="product-summary border-top pt-3 mt-2 pb-3">
                            <p><?php echo $row['describes']; ?></p>
                            
                            <a class="d-block js-learn-more-link" href="">[Xem chi tiết]</a>
                        </div>
                        <div class="product-price font-weight-bold">
                            <span class="special-price m-0"></span>
                            <del class="old-price ml-2"></del>
                        </div>
                        <form action="./Cart/add.php?id=<?php echo $row["id"]; ?>&quantity=1" method="post" enctype="multipart/form-data" id="add-to-cart-form" class="border-top">
                            <input type="hidden" name="productAlias" value="taurus">
                            <div class="row align-items-start pt-3 pb-2">
                                <div class="product-control">
                                    <div class="box-variant clearfix ">
                                        <input type="hidden" name="variantId" value="41470588">
                                    </div>
                                    <div class="product-quantity d-sm-flex align-items-center clearfix">
                                        <header class="font-weight-bold mb-2" style="min-width: 100px;">Số lượng:</header>
                                        <div class="custom-btn-number form-inline border-0">	
                                            <button class="mr-2 mb-2 border rounded bg-white" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;" type="button">-</button>
                                            <button class="mr-2 mb-2 border rounded bg-white" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</button>
                                            <input type="number" maxlength="2" name="quantity" min="1" value="1" class="form-control prd_quantity border rounded mb-2" id="qtym">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-2 pb-2">
                                    <div class="btn-mua button_actions clearfix">
                                            <button type="submit" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                <span class="txt-main text_1">Thêm vào giỏ</span>
                                            </button>
                                            <button type="submit" class="btn fast btn_base btn_add_cart btn-cart">
                                                <span class="txt-main text_1">Mượn sách</span>
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </form><br></br>
                    
                    </div>
                    </div>
                    <div class="product-content border-top pt-4 mewcontent">
                    <h3 class="special-content_title font-weight-bold" style="color: #ff5e0a;">Thông tin chi tiết</h3>
                        <div class="  position-relative rt" style="color:dimgray">
                            <p><?php echo $row['detail']; ?></p>
                            
                        </div>
                    </div>
                </div>
           
                <div class="col-xl-3 col-lg-3 col-12">
                    <div class="row align-items-center msb mt-4 mb-4 d-lg-block olp">
                        <div class="item_coupon col-12 col-sm-6 col-lg-4 col-xl-12 mb-2">
                            <div class="content o_1 text-center p-xl-2 p-lg-2 p-sm-3 p-2 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-1 mb-1 text-capitalize line_1 font-weight-bold">Sách Hay</h4>
                                <p class="desc line_2">
                                <b>Mark Twain</b>
                                -  Một người không đọc sách chẳng hơn gì kẻ không biết đọc.
                                </p>
                            </div>
                        </div>
                        <div class="item_coupon col-12 col-sm-6 col-lg-4 col-xl-12 mb-2">
                            <div class="content o_2 text-center p-xl-2 p-lg-2 p-sm-3 p-2 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-1 mb-1 text-capitalize line_1 font-weight-bold">Sách Hay</h4>
                                <p class="desc line_2">
                                <b> Barack Obama</b>
                                -  Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn.
                                </p>
                            </div>
                        </div>
                        <div class="item_coupon col-12 col-sm-6 col-lg-4 col-xl-12 mb-2">
                            <div class="content o_3 text-center p-xl-2 p-lg-2 p-sm-3 p-2 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-1 mb-1 text-capitalize line_1 font-weight-bold">Sách Hay</h4>
                                <p class="desc line_2">
                                <b> Dr Seuss</b>
                                -  Bạn càng đọc nhiều, bạn càng biết nhiều. Bạn càng học nhiều, bạn càng đi nhiều.
                                </p>
                            </div>
                        </div>
                        <div class="item_coupon col-12 col-sm-6 col-lg-4 col-xl-12 mb-2">
                            <div class="content o_4 text-center p-xl-2 p-lg-2 p-sm-3 p-2 d-flex flex-column align-items-center position-relative">
                                <h4 class="coupon-title mt-1 mb-1 text-capitalize line_1 font-weight-bold">Sách Hay</h4>
                                <p class="desc line_2">
                                <b>Heinrich Heine</b>
                                -  Khi họ đốt sách thì chính là họ cũng đang đốt cả loài người. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="about_sidebarblog aside-item">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0 cate">
                                <a href="/gioi-thieu" title="">Về chúng tôi</a>
                            </h2>
                        </div>
                        <div class="aside-content">
                            <a href="/gioi-thieu" title="Về chúng tôi" class="img_about scale_hover">
                                <img class="imageload lazyload banner_leng loaded" src="http://bizweb.dktcdn.net/thumb/large/100/415/471/articles/cuong-vong-phi-nhan-tinh.jpg?v=1611920830317" alt="Về chúng tôi" data-was-processed="true">
                            </a><br>
                            <div class="about_sum">
                                <p>
                                Công ty cổ phần Sách Mew BS (Mew BS Joint-Stock Company – gọi tắt là Mew BS) do một nhóm trí thức trẻ thành lập ở Hà Nội năm 2005 với niềm tin: Tri thức là Sức mạnh. Thông qua việc giới thiệu các tác phẩm có giá trị của thế giới, Mew BS mong muốn trở thành nhịp cầu nối nguồn tri thức nhân loại với dân tộc Việt Nam.


                                </p>
                                <a href="./Gioi-Thieu.php" class="btn-primary btn_doctiep" title="Đọc tiếp">Đọc tiếp</a>
                            </div>
                        </div>
                    </div>
                        
                        
                        
                </div>
                <div class="m_product col-12 mt-5 mb-5">
                    <?php 
                        require ('connect.php'); 
                        $query = "SELECT * FROM books  WHERE category_id=3;";
                        $book  = $conn->query($query);
                    ?>	
                    <h2 class="title mb-4 mt-3 text-uppercase font-weight-bold text-center position-relative">
                    <a class="position-relative" href="san-pham-noi-bat" title="Sản phẩm khác">Sản phẩm khác</a>
                    </h2>
                    <div class="b_product swiper-container position-relative swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <?php foreach ($book as $row){?>
                        <div class="swiper-slide swiper-slide-active" style="width: 323.75px; margin-right: 15px;">
                            <div class="product-item position-relative modal-open">
                                <div class="sale-label sale-top-right position-absolute"><span class="font-weight-bold">-
                                21% 
                                </span>
                                </div>
                                <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block" title="<?php echo $row['booktitle'] ?>">
                                <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                    <img src="uploads/<?php echo $row['img'] ?>" data-src="<?php echo $row['img'] ?>" class="d-block img img-cover position-absolute lazy loaded" alt="<?php echo $row['booktitle'] ?>">
                                </div>
                                </a>
                                <div class="item-info mt-1 position-absolute text-center">
                                <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href="Detail.php?id=<?php echo $row ['id']; ?>" title="<?php echo $row['booktitle'] ?>"><?php echo $row['booktitle'] ?></a></h3>
                                <div class="item-price mb-1">
                                    <span class="special-price font-weight-bold"></span>
                                    <del class="old-price"> </del>
                                </div>
                                <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php }?> 
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <script>
                    var swiperRelateProduct = new Swiper('.b_product', {
                    spaceBetween: 15,
                    loop: false,
                    speed: 300,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2
                        },
                        768: {
                            slidesPerView: 3
                        },
                        992: {
                            slidesPerView: 4
                        },
                        1200: {
                            slidesPerView: 4
                        }
                    }
                });
                </script>
                
            </div>
        </section>
        <div class="pomi-lo"></div><br>
                <form accept-charset="utf-8" action="Detail.php?id=<?php echo $row['id']; ?>" id="article_comments"  method="post">
        <input name="FormType" type="hidden" value="article_comments">
        <input name="utf8" type="hidden" value="true"> 
        <p class="alert alert-success">
            <!-- Bạn đã đăng bình luận thành công. Xin cảm ơn!  -->
        </p>
        <div class="w-100 clear-fix">
            <div class="form-coment">
                <div class="margin-top-0 margin-bottom-30 w-100">
                    <h5 class="title-form-coment">BÌNH LUẬN CỦA BẠN</h5>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <fieldset class="form-group padding-0">
                        <input placeholder="Họ và tên*" type="text" class="form-control form-control-lg" value="" id="full-name" name="username" >
                    </fieldset>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <fieldset class="form-group padding-0">	
                        <input placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" type="email" class="form-control form-control-lg" value="" name="email" >
                    </fieldset>
                    </div>
                    <fieldset class="form-group padding-right-15 padding-left-15 col-lg-12 col-md-12 col-sm-12 col-xs-12">	
                    <textarea placeholder="Nội dung* " class="form-control form-control-lg"  rows="6" name="comment" ></textarea>
                    </fieldset>
                    <div class="margin-bottom-fix margin-bottom-50-article clearfix padding-right-15 padding-left-15">
                    <button type="submit" name="submit" class="btn btn-primary button_45">Gửi thông tin</button>
                    </div>
                </div>
            </div><br>
            <!-- End form mail -->
        </div>
        <div id="article-comments">
        <?php 
            $sql = "SELECT * FROM comments";
            $result = mysqli_query($conn , $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){

                
            
        ?>
        <h5 class="title-form-coment margin-bottom-25"> Bình luận:</h5>
        <div class="article-comment clearfix">
            <figure class="article-comment-user-image">
                <img src="https://www.gravatar.com/avatar/799f6f9e787a3a5e032f9c2d518279e0?s=110&amp;d=identicon" alt="binh-luan" class="block">
            </figure>
            <div class="article-comment-user-comment">
                <p class="user-name-comment"><strong><?php echo $row['username'] ?></strong>
                    <a href="#article_comments" class="btn-link pull-xs-right hidden">Trả lời</a>
                </p>
                <span class="article-comment-date-bull"><?php echo $row['email'] ?></span>
                <p class="cm"><?php echo $row['comment'] ?></p>
            </div>
        </div>
        <?php 
        }
        }?>
        </div>
        </form>
    </div>
    

    <?php require_once('Footer.php') ?>
</body>
</html>