
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../js/main.js">
    <title>DashBoad Admin</title>
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
                <input type="text" name="search" id="search" placeholder="Procurar...">
                <i class="fa fa-search"></i>
            </form>
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
                        <a href="User/Create.php" class="btn btn-blue">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Thêm Sách
                        </a>
                    </div>
                    <table class="zebra">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>email</th>
                                <th>Mật Khẩu</th>
                                <th>Quyền</th>
                                <th>Số Điện Thoại</th>
                                <th>Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                   
                                    $con = new mysqli('localhost', 'root', '', 'qlythuviensach');
                                    $sql = "SELECT * from users";
                                    if ($result = $con->query($sql)) {
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_array()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td>" . $row['password'] . "</td>";
                                                echo "<td>" . $row['role'] . "</td>";
                                                echo "<td>" . $row['phone'] . "</td>";
                                                echo " <td><a href='./User/Update.php?id=" . $row['id'] . "' class='btn btn-orange'><i class='fa fa-edit' aria-hidden='true'></i></a>
                                                <a href='./User/Delete.php?id=" . $row['id']."' 
                                                onclick='location.href=showDele()' class='btn btn-red' ><i class='fa fa-trash' aria-hidden='true'></i></a>
                                                <a href='#' class='btn btn-green'><i class='fa fa-eye' aria-hidden='true'></i></a>
                                                </td>";
                                                echo "</tr>";
                                            }
                                            $result->free();
                                        } else {
                                            echo "Không tìm thấy dữ liệu.";
                                        }
                                    } else {
                                        echo "ERROR: Không thể thực thi câu lệnh $sql. " . $mysqli->error;
                                    }
                                    $con->close();
                                    ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>