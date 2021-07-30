<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    <!-- Văn Học Nổi Tiếng -->
    <div class="m_product pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-xl-9 position-relative">
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
                        $query = "SELECT * FROM books  WHERE category_id=3;";
                        $book  = $conn->query($query);
                    ?>
                    <h2 class="title mb-5 text-uppercase font-weight-bold position-relative left">
                        <a href="#" class="position-relative" title="Văn Học Nổi Tiếng">Văn Học Nổi Tiếng</a>
                    </h2>
                    <div class=" bn_product mb-4">
                        <div class="effect-ming mb-4">
                            <div class="position-relative modal-open">
                                <a href="#" title="Văn học nổi tiếng">
                                <img src="images/bn_pr_3.png" alt="#" class="lazy loaded">
                                </a>
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="b_product_3 swiper-container position-relative swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">
                        <?php foreach ($book as $row){?>
                            <div class="swiper-slide " >
                                <div class="product-item position-relative modal-open">
                                    <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block">
                                        <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                        <img src="uploads/<?php echo $row['img']; ?>" alt="img" class="d-block img img-cover position-absolute lazy loaded ">
                                            
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
                        <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev b3_prev" ></div>
                        <div class="swiper-button-next b3_next" ></div>
                        
                    </div>
                    <?php 
                break; 
                    }
                }?>
                </div>
                <div class="col-12 col-xl-3 d-none d-xl-block">
                <?php
                    require ('connect.php'); 
                    $query = "SELECT * FROM books  WHERE category_id=6;";
                    $book  = $conn->query($query);
                ?>
                    <h2 class="title mb-5 text-uppercase font-weight-bold position-relative left">
                        <a href="" class="position-relative" title="Cùng Đón Đọc"> Cùng Đón Đọc</a>
                    </h2>
                    <div class="position-relative">
                    <?php foreach ($book as $row){?>
                        <div class="slider">
                            <div class="product-item-list d-flex justify-content-center item_list border p-2 mb-2">
                                <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb flip effect-ming col-3 p-0" title="Dogffigt">
                                    <div class="item-image w-100 m-0 aspect ratio2by3 position-relative">
                                        <img src="uploads/<?php echo $row['img']; ?>" alt="Dogfight over TOKYO" class="d-block protmt1 img img-cover position-absolute w-100 h-100 lazy loaded">
                                        <div class="actions hidden-xs hidden-sm remove_html">
                                            <form action="#" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback">
                                            <input type="hidden" name="variantId" tabindex="0">
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-info col-9 p-0 pl-3">
                                    <h3 class="item-title font-weight-bold line_1 mt-1">
                                        <a href="" class="d-block" title="Dogfight over TOKYO"><?php echo $row['booktitle']?></a>
                                    </h3>
                                    <div class="author">
                                        <p class="mb-1 d-none d-xl-block">
                                            Tác giả: 
                                            <span> John F. Wukovits </span>
                                        </p>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-price">
                                            <span class="regular-price font-weight-bold">
                                            <a href="./Lien-He.php"> Liên Hệ</a>
                                            </span><br>
                                            <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="action font-weight-bold d-inline-block position-relative mt-1 mb-1" title="Chi Tiết">Chi Tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                
                            } ?>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
        
        <script type="text/javascript">
                
                
        </script>
    <!-- Sách Kĩ Năng Sống -->
    <div class="m_product pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <?php
                        require ('connect.php');
                        $query = "SELECT * FROM books order by id desc";
                        $result = $conn->query($query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc())
                                    {
                ?>
                <div class="col-12 col-xl-9 position-relative">
                    <h2 class="title mb-5 text-uppercase font-weight-bold position-relative left">
                        <a href="#" title="Sách Kĩ Năng Sống">Sách Kĩ Năng Sống</a>
                    </h2>
                    <div class=" bn_product mb-4">
                        <div class="effect-ming mb-4">
                            <div class="position-relative modal-open">
                                <a href="#" title="Văn học nổi tiếng">
                                <img src="images/bn_pr_4.png" alt="#" class="lazy loaded">
                                </a>
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="b_product_3 swiper-container position-relative swiper-container-initialized swiper-container-horizontal">
                    <?php
                        require ('connect.php'); 
                        $query = "SELECT * FROM books  WHERE category_id=4;";
                        $book  = $conn->query($query);
                    ?>
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <?php foreach ($book as $row){?>
                            <div class="swiper-slide swiper-slide-active" style="width: 238.25px; margin-right: 15px;">
                                <div class="product-item position-relative modal-open">
                                    <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block">
                                        <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                                            <img src="uploads/<?php echo $row['img']; ?>" alt="#" class="thumb d-block">
                                            
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
                                
                            } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev b3_prev" ></div>
                        <div class="swiper-button-next b3_next" ></div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 d-none d-xl-block">
                <?php
                    require ('connect.php'); 
                    $query = "SELECT * FROM books  WHERE category_id=5;";
                    $book  = $conn->query($query);
                ?>
                    <h2 class="title mb-5 text-uppercase font-weight-bold position-relative left">
                        <a href="" class="position-relative" title="Cùng Đón Đọc"> Cùng Đón Đọc</a>
                    </h2>
                    <div class="position-relative">
                    <?php foreach ($book as $row){?>
                        <div class="slider">
                            <div class="product-item-list d-flex justify-content-center item_list border p-2 mb-2">
                                <a href="#" class="thumb flip effect-ming col-3 p-0" title="Dogffigt">
                                    <div class="item-image w-100 m-0 aspect ratio2by3 position-relative">
                                    <img src="uploads/<?php echo $row['img']; ?>" alt="Dogfight over TOKYO" class="d-block protmt1 img img-cover position-absolute w-100 h-100 lazy loaded">
                                    </div>
                                </a>
                                <div class="item-info col-9 p-0 pl-3">
                                    <h3 class="item-title font-weight-bold line_1 mt-1">
                                    <a href="" class="d-block" title="Dogfight over TOKYO"><?php echo $row['booktitle'] ?></a>
                                    </h3>
                                    <div class="author">
                                    <p class="mb-1 d-none d-xl-block">
                                        Tác giả: 
                                        <span> John F. Wukovits </span>
                                    </p>
                                    </div>
                                    <div class="item-content">
                                    <div class="item-price">
                                        <span class="regular-price font-weight-bold">
                                        <a href="./Lien-He.php"> Liên Hệ</a>
                                        </span><br>
                                        <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="action font-weight-bold d-inline-block position-relative mt-1 mb-1" title="Chi Tiết">Chi Tiết</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                
                            } ?>
                    </div>
                </div>
                <?php 
                break; 
                    }
                }?>
            </div>
        </div>
</div>

        
</body>
</html>