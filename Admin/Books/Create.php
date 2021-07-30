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
            </form>
            <div>
                <a href="../BookAdmin.php"> Chuyển hướng</a>
                <a href="#"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    </nav>
    <aside class="sidenav hidden-sm hidden-md" id="nav">
        <div class="list">
        <a href="./../MasterPageAdmin.php" class="active"><i class="fa fa-home"></i> Trang Chủ</a>
            <a href="./UserAdmin.php"><i class="fa fa-users"></i> Người Dùng</a>
            <a href="#"><i class="fa fa-edit"></i> Chỉnh Sửa</a>
            <a href="#"><i class="fa fa-wrench"></i> Quản lý</a>
            <a href="#"><i class="fa fa-list"></i> Đồ họa</a>
            <a href="#"><i class="fa fa-bell"></i> Thông báo</a>
            <a href="#"><i class="fa fa-cogs"></i> Cài đặt</a>
            <a href="./BookAdmin.php"><i class=" fas fa-book-dead"> </i>Sách</a>
            <a href="./CategoryAdmin.php"><i class=" fas fa-leaf"> </i>Thể Loại</a>
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
                    <form action="./../../Upload.php" class="form" method="post" enctype="multipart/form-data">
                        <div class="group">
                            <label for="name">Booktitle</label>
                            <input type="booktitle"  id="name" placeholder="VD: Alex Ded, Tarus..." name="booktitle">
                        </div>
                        <div class="group">
                            <label for="name">Descripbes</label>
                            <input type="describes"  id="name" placeholder="VD: sản phẩm ưa chuộng, văn học..." name="describes">
                        </div>
                        <div class="group">
                            <label type="name" for="name">Chọn Thương Hiệu:</label>
                            <?php
                            require ('../../DBdata.php');
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
                        <div class="group">
                            <label for="name">Images</label>
                            <input required="true" type="file" id="fileupload" class="form-control hidden" name="fileupload" >
                        </div>
                       
                        <div class="group">
                            <label for="name">Quantity</label>
                            <input type="quantity"  id="name" placeholder="VD: 100, 50, 20..." name="quantity">
                        </div>
                        <div class="group">
                            <label for="name">Detail</label>
                            <input type="detail"  id="name" placeholder="VD: Sóng ngoài kia có xa..." name="detail">
                        </div>
                        <div class="group">
                            <input type="submit" name="submit" class="btn btn-green" style="width: 20%;" value="submit">
                            
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </main>
</body>
</html>
<?php 
    require ('./../../connect.php');
	if (isset($_POST['submit'])) {
            $booktitle = $_POST['booktitle'];
            $describes = $_POST['describes'];
            $category = $_POST['category'];
            $img = $_POST['img'];
            $quantity = $_POST['quantity'];
            $detail = $_POST['detail'];
			$queryUpdate = "insert into books (booktitle, describes, category_id, img, quantity, detail) VALUES ('$booktitle', '$describes', '$category', '$img', '$quantity','$detail');";
			
			if ($conn->query($queryUpdate) === TRUE) {
    			header("Location: ../BookAdmin.php", false, 307);
			} else {
    			echo "Error updating record: " . $conn->error;
			}

			$conn->close();
	}

?>