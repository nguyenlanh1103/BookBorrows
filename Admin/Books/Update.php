<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../js/main.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Thêm Người Dùng</title>
</head>
<body>
    <div id="search-results" style="display: none;">
        
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>Dashboard</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="bạn muốn tìm gì...">
                <i class="fa fa-search"></i>
                <a href="./../BookAdmin.php">chuyển hướng</a>
            </form>
        </div>
    </nav>
    <aside class="sidenav hidden-sm hidden-md" id="nav">
        <div class="list">
        <a href="./../../MasterPageAdmin.php" class="active"><i class="fa fa-home"></i> Trang Chủ</a>
            <a href="./../UserAdmin.php"><i class="fa fa-users"></i> Người Dùng</a>
            <a href="#"><i class="fa fa-edit"></i> Chỉnh Sửa</a>
            <a href="#"><i class="fa fa-wrench"></i> Quản lý</a>
            <a href="#"><i class="fa fa-list"></i> Đồ họa</a>
            <a href="#"><i class="fa fa-bell"></i> Thông báo</a>
            <a href="#"><i class="fa fa-cogs"></i> Cài đặt</a>
            <a href="./../BookAdmin.php"><i class=" fas fa-book-dead"> </i>Sách</a>
            <a href="./../CategoryAdmin.php"><i class=" fas fa-leaf"> </i>Thể Loại</a>
            <a href="#"><i class=" fas fa-book-open"> </i> Mượn</a>
            <a href="#"><i class=" fas fa-book-reader"> </i> Độc giả</a>
            
        </div>
    </aside>
    <main class="content">
        
        <div class="grid">
            <div class="painel">
                <div class="painel-header">
                    <h4 class="painel-title">Form</h4>
                </div>
                <div class="painel-body">
                    <form action="./../../UploadImage.php" class="form"  method="post" enctype="multipart/form-data">
                        <?php
                                require ('./../../connect.php');
                                $id_update = $_GET['id'];
                                $query = "SELECT * FROM books WHERE id = '$id_update'";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $booktitle = $row['booktitle'];
                                    $describes = $row['describes'];
                                    $category = $row['category_id'];
                                    $quantity = $row['quantity'];
                                    $detail = $row['detail'];
                                }
                        ?>
                        <input type="hidden" value="<?php echo $id ?>" name="id_book">
                        <div class="group">
                            <label for="name">Booktitle</label>
                            <input type="name"  id="name"  value="<?php echo $booktitle; ?>" name="booktitle">
                        </div>
                        <div class="group">
                            <label for="name">Descripbes</label>
                            <input type="name"  id="name" placeholder="VD: sản phẩm ưa chuộng, văn học..." value="<?php echo $describes; ?>" name="describes">
                        </div>
                        <div class="group">
                            <label type="name" for="name">Chọn Thương Hiệu:</label>
                            <?php
                            require('../../DBdata.php');
                            $arr =  getArr1();
                            $xau = '<select id="name" class="form-control hidden" name="category" >';
                            for($i=0; $i<count($arr); $i++){
                                $xau.='<option value="'.$arr[$i]->id.'">'.$arr[$i]->booktitle.'</option>';
                            }
                            $xau.='</select>';
                            echo $xau;
                            // print_r($arr);
                            ?>
                        </div>
                        <div class="group" >
                            
                            <label for="name">Images</label>
                             <input type="file" id="fileupload" class="form-control hidden" name="fileupload" >
                            <img src="<?php echo $img ?>" style="max-width: 150px;"> 
                        </div>
                        <div class="group">
                            <label for="name">Quantity</label>
                            <input type="name" id="name" placeholder="descripbes.." value="<?php echo $quantity; ?>" name="quantity">
                        </div>
                        <div class="group">
                            <label for="name">Detail</label>
                            <input type="name"  id="name"  placeholder="sóng ngoài khơi..." value="<?php echo $detail; ?>" name="detail">
                        </div>
                        <div class="group">
                            <input type="submit" class="btn btn-green" style="width: 12%;" value="Save" name="submit">
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </main>
</body>
</html>
<?php 


?>