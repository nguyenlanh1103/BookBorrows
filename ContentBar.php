<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./swiper/css/Bar.scss.css"> -->
    <link rel="stylesheet" href="./swiper/css/_slider.scss.css">
</head>
<body>
    <!-- Sản Phẩm Ưa Chuộng -->
    <div class="m_product pb-lg-2 pt-lg-5 pt-4 pb-4">
        <div class="container">
            <h2 class="title mb-5 text-uppercase font-weight-bold text-center position-relative">
                <a href="#" class="position-relative" title="Sản phẩm Ưa Chuộng">
                    Sản phẩm Ưa Chuộng
                </a>
            </h2>
            <div class="row">
                <div class="col-xl-3 col-12">
                    <div class="row align-items-center msb mb-4 mt-2 mt-md-0 mb-md-0">
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
                </div> <!-- slider-left -->
                <div class="col-xl-9 col-12">
                <div class="position-relative row d-flex align-items-center flex-wrap">
                        <div class="col-5 col-md-4">
                            <div class="b_product_2 swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-thumbs">
                                <?php
                                    require ('connect.php'); 
                                    $query = "SELECT * FROM books  WHERE category_id=1;";
                                    $book  = $conn->query($query);
                                ?>
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <?php foreach ($book as $row){?>
                                    <div class="swiper-slide big_img swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="width: 312px; margin-right: 5px;">
                                        <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block" title="<?php echo $row['booktitle'] ?>">
                                            <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                                <img src="uploads/<?php echo $row['img'] ?>" data-src="<?php echo $row['img'] ?>" class="d-block img img-cover position-absolute lazy loaded" alt="<?php echo $row['booktitle'] ?>">
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>   
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="bt_product_2 swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3350px, 0px, 0px); height: 361px;">
                                <?php foreach ($book as $row){?>
                                    <div class="swiper-slide pl-lg-5 pl-0 " >
                                        <div class="item-info mt-md-0 mt-2 position-relative">
                                            <h3 class="item-title font-weight-bold mb-md-3 mb-2">
                                                <a class="d-block" href="Detail.php?id=<?php echo $row ['id']; ?>" title="<?php echo $row['booktitle'] ?>">
                                                <?php echo $row['booktitle'] ?>
                                                </a> 
                                            </h3>
                                            <div class="arthor mb-xl-5 mb-md-4 mb-2 position-relative d-none d-md-block">
                                                Rando Kim
                                            </div>
                                            <div class="item_sum text-justify line_5 mb-3 d-none d-sm-block">
                                                <p><?php echo $row['describes'] ?></p>
                                            </div>
                                            <div class="item-price">
                                                <span class="special-price"></span>
                                                <del class="old-price"> </del>
                                            </div>
                                            <a class="action pt-2 pb-2 pr-4 pl-4 d-inline-block position-relative mt-3 mb-3 sitdown modal-open" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                                <div class="swiper-pagination pl-lg-5 pl-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide "></span></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>

               </div>
            </div> 
        </div>
    </div>
    <div class="m_banner mb-lg-5 mt-lg-5 mt-3 mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="effect-ming col-12 col-sm-12 col-md-12 col-lg-6 pr-xl-2 pr-lg-0 mb-3 mb-lg-0">
                    <div class="position-relative modal-open">
                        <a href="#" title="WebSach">
                            <img src="./images/banner_1.jpg">
                        </a>
                        <div class="position-absolute w-100 h-100 overlay"></div>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="effect-ming modal-open position-relative mb-3">
                        <a href="#" title="WebSach">
                            <img src="./images/banner_2.jpg">
                        </a>
                        <div class="position-absolute w-100 h-100 overlay"></div>
                        
                    </div>
                    <div class="effect-ming modal-open position-relative">
                        <a href="#" title="WebSach">
                            <img src="./images/banner_3.jpg">
                        </a>
                        <div class="position-absolute w-100 h-100 overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Images -->
    <!-- Sản Phẩm Nổi Bật  -->
    <div class="m_product pt-lg-5 pt-3">
        <div class="container">
            <h2 class="title mb-5 text-uppercase font-weight-bold text-center position-relative">
                <a href="#" class="position-relative" title="Sản phẩm nổi bật">
                Sản Phẩm Nổi Bật 
                </a>
            </h2>
            <div class="b_product row ">
            <?php
                        require ('connect.php');
                        $query = "SELECT * FROM books order by id desc";
                        $result = $conn->query($query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc())
                                    {
            ?>
            <?php
                    require ('connect.php'); 
                    $query = "SELECT * FROM books  WHERE category_id=2;";
                    $book  = $conn->query($query);
            ?>
                <div class="col-12 col-md-8">
                    <div class="row">
                    <?php foreach ($book as $row){?>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 mb-3 mb-md-5">
                            <div class="product-item position-relative rich" data-title="<?php echo $row['booktitle'] ?>" data-content="<?php echo $row ['describes'] ?>">
                                <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block">
                                
                                    <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                        <img src="uploads/<?php echo $row['img']?>" >
                                        
                                    </div>
                                </a>
                                <div class="item-info mt-1 position-absolute text-center">
                                    <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href="/dogfight-over-tokyo" title="Dogfight over TOKYO"><?php echo $row['booktitle']?></a></h3>
                                    <div class="item-price mb-1">
                                        <span class="regular-price" style=" color:	F0F8FF;">
                                            <a href="./Cart/add.php?id=<?php echo $row["id"]; ?>&quantity=1">Mượn Sách</a>
                                        </span> 
                                    </div>
                                    <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php 
                       
                    }?>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-none d-md-block js_item_ajax" id="js-item-rich-infor">
                
                    <div class="item-info mt-md-0 mt-2 position-relative">
                        <h3 class="item-title font-weight-bold mb-md-3 mb-2">
                            <a href="#" class="d-block" title="Pisces">											
                                <p class="item-title-hover"></p>	
                            </a>
                        </h3>
                        <div class="arthor mb-xl-5 mb-md-4 mb-2 position-relative d-none d-md-block" >										
                            Alanda Zodiac
                        </div>
                        <div class="item_sum text-justify line_5 mb-3 d-none d-sm-block">
                            <p class="item-content-hover" ></p>
                        </div>
                        <a class="action pt-2 pb-2 pr-4 pl-4 d-inline-block position-relative mt-3 mb-3 sitdown modal-open" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                    </div>
                   
                </div>
            </div>
            <?php 
                break; 
                    }
            }?>
        </div>
    </div>
    <div class="m_banner mb-lg-5 mt-lg-5 mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="effect-ming overflow-hidden">
                    <div class="position-relative modal-open">
                        <a href="#" title="Mew BS">
                            <div class="position-relative mb-4 mb-md-0">
                                <img src="images/banner_1_2.jpg" alt="#" class="d-block lazy loaded">
                            </div>
                        </a>
                        <div class="position-absolute w-100 h-100 overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
<div>
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol id="arrow-prev" viewbox="0 0 492 492" xmlns="http://www.w3.org/2000/svg">
      <path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"></path>
    </symbol>
    <symbol id="arrow-next" viewbox="0 0 492.004 492.004" xmlns="http://www.w3.org/2000/svg">
      <path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"></path>
    </symbol>
  </svg>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./swiper/js/slider.js"></script>
</html>
