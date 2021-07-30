<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <!-- Tin Tức - Nổi Bật -->
    <?php 
        require ('connect.php'); 
        $query = "SELECT * FROM books  WHERE category_id=7;";
        $book  = $conn->query($query);
    ?>				
    <div class="m_blog pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container">
            <h2 class="title mb-5 text-uppercase font-weight-bold text-center position-relative">
                <a href="#" class="position-relative" title="Tin Tức- Sự Kiện"> Tin Tức Sự Kiện </a>
            </h2>
            <div class="row">
            <?php foreach ($book as $row){?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                
                    <div class="item_grid mb-4">
                        <div class="img_thm position-relative">
                            <a href="BlogBook.php?id=<?php echo $row ['id']; ?>" class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="uploads/<?php echo $row['img']?>" alt="#" class="lazy loaded">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>
                            <div class="entry-date position-absolute text-center rounded-right" style="background-color:#ff6600";>
                                <p class="day font-weight-bold">
                                    5
                                </p>
                                <p class="yeah">	
                                    04/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h3 class="title_blo font-weight-bold mt-2">
                                <a href="#" class="line_1"><?php echo $row['booktitle']?></a>
                            </h3>
                            <div class="sum line_1 line_3 h-auto"><?php echo $row['detail']?></div>
                        </div>
                    </div>
                
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</body>
</html>