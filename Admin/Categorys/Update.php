<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../js/main.js">
    <title>Thêm Người Dùng</title>
</head>
<body>
    <div id="search-results" style="display: none;">
        Nenhum dado encontrado
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>Dashboard</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="Procurar...">
                <i class="fa fa-search"></i>
            </form>
            <div>
                <a href="./../CategoryAdmin.php"><i class="fa fa-user"></i> 
                    chuyển hướng
                </a>
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
            <?php

            require ('./../../connect.php');
            $idUpdate = $_GET['id'];

            // sql to delete a record
            $id_update = $_GET['id'];
                $query = "SELECT * FROM categorys WHERE id = '$id_update'";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    $booktitle = $row['booktitle'];
                }
            ?>
            <div class="painel">
                <div class="painel-header">
                    <h4 class="painel-title">Form</h4>
                </div>
                <div class="painel-body">
                    <form action="#" class="form" method="post">
                        <div class="group">
                            <label for="booktitle">Tên Thể Loại:</label>
                            <input type="booktitle" class="form-control" id="name" placeholder="VD: thiếu nhi, SGK..." name="booktitle">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
        $queryUpdate = "UPDATE categorys SET booktitle = '$booktitle' WHERE id = '$id_update'";
        
        if ($conn->query($queryUpdate) === TRUE) {
            header("Location: ./../CategoryAdmin.php", false, 307);
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location: ./../CategoryAdmin.php", false, 307);
        }

        $conn->close();
}


?>