<?php session_start();?>
<?php
    if(!isset($_SESSION['adminname'])) {
        header('Location: Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="js/main.js">
    <!-- <link rel="stylesheet" href="./swiper/css/admin.css"> -->
    <!-- <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="http://localhost/admin/admin/css/sb-admin-2.min.css"> -->
    <title>DashBoad Admin</title>
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
                <input type="text" name="search" id="search" placeholder="bạn muốn tìm gì...">
                <i class="fa fa-search"></i>
            </form>
            <div class="topbar-divider d-none d-sm-block"></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> <?php echo "Xin chào ". $_SESSION['adminname']; ?></a>
                    </li>
                    <li class="fa fa-power-off">
                        <a class="nav-link" href="Logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <aside class="sidenav hidden-sm hidden-md" id="nav">
        <div class="list">
            <a href="#" class="active"><i class="fa fa-home"></i> Trang Chủ</a>
            <a href="Admin/UserAdmin.php"><i class="fa fa-users"></i> Người Dùng</a>
            <a href="#"><i class="fa fa-edit"></i> Chỉnh Sửa</a>
            <a href="#"><i class="fa fa-wrench"></i> Quản lý</a>
            <a href="#"><i class="fa fa-list"></i> Đồ họa</a>
            <a href="#"><i class="fa fa-bell"></i> Thông báo</a>
            <a href="#"><i class="fa fa-cogs"></i> Cài đặt</a>
            <a href="Admin/BookAdmin.php"><i class=" fas fa-book-dead"> </i>Sách</a>
            <a href="Admin/CategoryAdmin.php"><i class=" fas fa-leaf"> </i>Thể Loại</a>
            <a href="#"><i class=" fas fa-book-open"> </i> Mượn</a>
            <a href="#"><i class=" fas fa-book-reader"> </i> Độc giả</a>   
        </div>
    </aside>
    <main class="content">
        <div class="grid">
            <div class="mini-reports bg-blue">
                    <div class="l">
                        <span>10</span>
                        <span>Notification</span>
                    </div>
                    <div class="r">
                        <i class="fa fa-book c-blue"></i>
                    </div>
            </div>
            <div class="mini-reports bg-green">
                    <div class="l">
                        <span>1</span>
                        <span>Home</span>
                    </div>
                    <div class="r">
                        <i class="fa fa-home c-green"></i>
                    </div>
            </div>
            <div class="mini-reports bg-orange">
                    <div class="l">
                        <span>100</span>
                        <span>Users</span>
                    </div>
                    <div class="r">
                        <i class="fa fa-users c-orange"></i>
                    </div>
            </div>
            <div class="mini-reports bg-red">
                    <div class="l">
                        <span>50</span>
                        <span>User Online</span>
                    </div>
                    <div class="r">
                        <i class="fa fa-user c-red"></i>
                    </div>
            </div>
        </div>
        <div class="grid">
            <div class="painel">
                <div class="painel-header">
                    <h4 class="painel-title">Table</h4>
                    <a href="#" class="btn btn-green">table</a>
                </div>
                <div class="painel-body">
                    <div class="alert alert-success">Erro ao adicionar usuário</div>
                    <table class="zebra">

                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>