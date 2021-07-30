<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../js/main.js">
    
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
    <title>DashBoad Admin</title>
</head>
<body>
    <div id="search-results" style="display: none;">
        Nenhum dado encontrado
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>Dashboard ADMIN</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="Procurar...">
                <i class="fa fa-search"></i>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="./../Admin/BookAdmin.php">chuyển hướng</a>
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
            <a href="#"><i class=" fas fa-book-dead"> </i>Sách</a>
            <a href="./CategoryAdmin.php"><i class=" fas fa-leaf"></i>Thể Loại</a>
            <a href="./CommentAdmin.php"><i class=" fas fa-book-reader"> </i> Bình Luận</a>
            <a href="#"><i class=" fas fa-book-open"> </i> Mượn</a>
            <a href="#"><i class=" fas fa-book-reader"> </i> Độc giả</a>
            
           
        </div>
    </aside>
    <main class="content">
        <div class="grid">
            <div class="painel">
                <div class="painel-header">
                    <h4 class="painel-title">Table</h4>
                    <a href="#" class="btn btn-green">table</a>
                </div>
                <div class="painel-body">
                    <div class="alert alert-success">
                        <a href="Books/Create.php" class="btn btn-blue">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Thêm Sách
                        </a>
                    </div>
                    <form action="" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                        <div class="bg-scroll">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-light text-dark">
                                        <th>Mã Đơn đặt hàng</th>
                                        <th>Khách hàng</th>
                                        <th>Ngày lập</th>
                                        <th>Ngày giao</th>
                                        <th>Nơi giao</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Tổng thành tiền</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>hi</td>
                                        <td>hi</td>
                                        <td>hi</td>
                                        <td>hi</td>
                                        <td>hi</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>