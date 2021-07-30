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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    <h4 class="painel-title">Form</h4>
                </div>
                <div class="painel-body">
                    <form action="#" class="form" method="post">
                        <div class="group">
                            <label for="name">Họ Tên:</label>
                            <input type="username" class="form-control" id="username" placeholder="VD: nguyen hung,.." name="username">
                        </div>
                        <div class="group">
                            <label for="name">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="VD: nguyenhung@gmail.com,..." name="email">
                        </div>
                        <div class="group">
                            <label for="name">Bình Luận:</label>
                            <input type="comment" class="form-control" id="comment" placeholder="VD: hello..." name="comment">
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
    require ('./../../connect.php');
	if (isset($_POST['submit'])) {
			$username = $_POST['username'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
			$queryUpdate = "insert into comments (username, email , comment) VALUES ('$username', ' $email', '$comment');";
			
			if ($conn->query($queryUpdate) === TRUE) {
    			header("Location: ./../CommentAdmin.php", false, 307);
			} else {
    			echo "Error updating record: " . $conn->error;
                header("Location: ./../CommentAdmin.php", false, 307);
			}

			$conn->close();
	}
    



?>