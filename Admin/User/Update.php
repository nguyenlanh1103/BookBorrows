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
                    <form action="#" class="form" method="post">
                        <?php
                                require ('./../../connect.php');
                                $id_update = $_GET['id'];
                                $query = "SELECT * FROM users WHERE id = '$id_update'";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['username'];
                                    $password = $row['password'];
                                    $email = $row['email'];
                                    $role = $row['role'];
                                    $phone = $row['phone'];
                                    $address = $row['address'];
                                }
                        ?>
                        <input type="hidden" value="<?php echo $id ?>" name="id_user">
                        <div class="group">
                            <label for="name">UserName</label>
                            <input type="name" value="<?php echo $name; ?>" name="name">
                        </div>
                        <div class="group">
                            <label for="name">Email</label>
                            <input type="name"  value="<?php echo $email; ?>" name="email">
                        </div>
                        <div class="group">
                            <label for="name">Password</label>
                            <input type="name" id="name" value="<?php echo  $password; ?>" name="password">
                        </div>
                        <div class="group">
                            <label for="name">Role</label>

                            <?php
                                require ('../../DBdata.php');
                                $arr =  getArr();
                                $xau = '<select id="user" class="form-control hidden" name="role" >';
                                for($i=0; $i<count($arr); $i++){
                                    $xau.='<option value="'.$arr[$i]->id.'">'.$arr[$i]->role.'</option>';
                                }
                                $xau.='</select>';
                                echo $xau;
                                
                            ?>
                        </div>
                        <div class="group">
                            <label for="name">Phone</label>
                            <input type="name" id="name" placeholder="+ 84" name="phone">
                        </div>
                        <div class="group">
                            <label for="name">Address</label>
                            <input type="name"  id="name" placeholder=" lê lợi city.." value="<?php echo  $address; ?>" name="address">
                        </div>
                        <div class="group">
                            <input type="submit" class="btn btn-green" style="width: 15%;" value="Save">
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
            $id = $_POST['id_user'];
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $queryUpdate = "UPDATE users 
            SET username = '$name', email = '$email',  password = '$password', role = '$role', phone = '$phone',  address = '$address'
            WHERE id = '$id_update'";
			if ($conn->query($queryUpdate) === TRUE) {
    			header("Location: ./../Users.php", false, 307);
			} else {
    			echo "Error updating record: " . $conn->error;
                header("Location: ./../Users.php", false, 307);
			}

			$conn->close();
	}