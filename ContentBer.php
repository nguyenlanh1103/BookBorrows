<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    <!-- Sách marketing và bán hàng -->
    <div class="m_product pb-lg-5 pt-lg-5 pt-3 pb-3">
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 position-relative more_abs">
                <?php
                    require ('connect.php');
                    $query = "SELECT * FROM books order by id desc";
                    $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc())
                                {
                ?>
                <?php
                    $query = "SELECT * FROM books  WHERE category_id=5;";
                    $book  = $conn->query($query);
                ?>
                    <h2 class="title mb-5 text-uppercase position-relative left full">
                    <a href="#" class="position-relative font-weight-bold small" title="Sách marketing và bán hàng">
                    Sách marketing và bán hàng
                    </a>
                    </h2>
                    <a href="#" class="position-absolute view_more font-weight-bold" title="Xem Thêm">
                        Xem Thêm
                    <i class="down_icon d-flex align-items-center justify-content-center position-absolute"></i>
                    </a>
                    <div class="b_product_5_1 swiper-container position-relative swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <?php foreach ($book as $row){?>
                            <div class="swiper-slide swiper-slide-active" style="width: 208.333px; margin-right: 15px;">
                                <div class="product-item position-relative modal-open">
                                    <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block">
                                        <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                            <img src="uploads/<?php echo $row['img']; ?>" alt="#" class="thumb d-block">
                                            
                                        </div>
                                    </a>
                                    <div class="item-info mt-1 position-absolute text-center">
                                        <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Dogfight over TOKYO"><?php echo $row['booktitle']?></a></h3>
                                        <div class="item-price mb-1">
                                            <span class="regular-price" style=" color:	F0F8FF;">
                                                <a href="./Cart/add.php?id=<?php echo $row['id']; ?>&quantity=1">Mượn Sách</a>
                                            </span> 
                                        </div>
                                        <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev b5_1_prev" ></div>
                        <div class="swiper-button-next b5_1_next" ></div>
                    </div>
                    <?php
                    break; 
                    }
                    
                }
                
                ?>
                    
                </div>
                <!-- Sách Nuôi Dạy Con -->
                <div class="col-12 col-md-6 position-relative more_abs">
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
                    $query = "SELECT * FROM books  WHERE category_id= 6;";
                    $book  = $conn->query($query);
                ?>
                    <h2 class="title mb-5 text-uppercase position-relative left full">
                        <a href="#" class="position-relative font-weight-bold small" title="Sách Nuôi Dạy Con">Sách Nuôi Dạy Con</a>
                    </h2>
                    <a href="#" class="position-absolute view_more font-weight-bold" title="Xem thêm">
                    Xem Thêm
                    <i class="down_icon d-flex align-items-center justify-content-center position-absolute"></i>
                    </a>
                    <div class="b_product_5_2 swiper-container position-relative swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <?php foreach ($book as $row){?>
                            <div class="swiper-slide swiper-slide-active" style="width: 208.333px; margin-right: 15px;">
                                <div class="product-item position-relative modal-open">
                                    <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block">
                                        <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                            <img src="uploads/<?php echo $row['img']; ?>" alt="#" class="thumb d-block">
                                        </div>
                                    </a>
                                    <div class="item-info mt-1 position-absolute text-center">
                                        <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Dogfight over TOKYO"><?php echo $row['booktitle']?></a></h3>
                                        <div class="item-price mb-1">
                                            <span class="regular-price" style=" color:	F0F8FF;">
                                                <a href="./Cart/add.php?id=<?php echo $row['id']; ?>&quantity=1">Mượn Sách</a>
                                            </span> 
                                        </div>
                                        <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev b5_2_prev" ></div>
                        <div class="swiper-button-next b5_2_next" ></div>
                    </div>
                    
                </div>
                <?php
                    break; 
                    }
                    
                }
                
                ?>
              
                <div class="m_about position-relative mb-lg-5 mt-lg-5 mt-3 mb-3">
                    <div class="container">
                        <div class="b_bg lazy_bg modal-open loaded" style="position: relative;">
                            <img src="images/about_bg.jpg" style="position: relative;">
                            <div class=" h-100 b_tx w-100" style="position: absolute;top: 300;top: 0; right: 0; left: 0;">
                                <div class="row d-flex justify-content-end align-items-center h-100 m-0">
                                    <div class="col-lg-6 col-12 d-flex justify-content-center flex-column h-100 bg pl-3 pl-md-5" style="z-index:300;">
                                        <div class="title_s mb-3 text-uppercase font-weight-bold">
                                            Đăng Kí Đại Lí
                                        </div>
                                        <div class="content">
                                            Bạn Có khả Năng Kinh Doanh Và Tìm Kiếm Sản Phẩm.<br>
                                            Trở thành đại lý của Mew BS
                                            để được hưởng trọn các quyền lợi sau:<br>
                                            - Chiết Khấu Vô Cùng Hấp Dẫn<br>
                                            - Chính Sách Hoàn Hàng Linh Hoạt<br>
                                            - Luôn Luôn Đảm Bảo Tủ Mượn Sách Đầy Đủ<br>
                                            - Luôn Được Tư Vấn Các Loại Sách Phù Hợp<br>
                                            - Có Nhân Viên Hỗ Trợ Riêng<br>
                                        </div>
                                        <div class="open_form" >
                                        <a href="" id="open_form" title="Đăng Kí Ngay" class="pt-3 pb-3 pl-5 pr-5 sitdown text-uppercase modal-open position-relative btn_send d-inline-block font-weight-bold" style="background-color: #ff6600";>
                                        <span class="m_op">Đăng Kí Ngay</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>   <!-- row -->    
        </div>
        
    </div>
</div>
    

</body>
</html>
