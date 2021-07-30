<?php
        $nameErr = $emailErr = $phoneErr = $passwordErr = $cpasswordErr ="";
		$name = $email = $password = $cpassword = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['username'])) {
				$nameErr = "Bắt buộc điền";
			}
			else {
				$name = test_input($_POST['username']);
				//kiểm tra xem chuỗi $name chỉ là chứa chữ
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
					$nameErr = "Chỉ được nhập kí tự từ a-z";
				}
			}
			if (empty($_POST['email'])) {
				$emailErr = "Bắt buộc điền";
			}
			else {
				$email = test_input($_POST['email']);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "email không hợp lệ";
				}
			}
			if (!empty($_POST['password']) && ($_POST['password'] == $_POST['cpassword'])) {
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				if (strlen($password) < '8') {
					$passwordErr = "Password phải có độ dài 8 kí tự trở lên";
				}
				elseif (!preg_match("#[0-9]+#",$password)) {
					$passwordErr = "Mật khẩu bắt buộc phải có ít nhất 1 chữ số";
				}
				elseif (!preg_match("#[A-Z]+#",$password)) {
					$passwordErr = "Mật khẩu bắt buộc phải có ít nhất 1 kí tự viết hoa";
				}
				elseif (!preg_match("#[a-z]+#",$password)) {
					$passwordErr = "Mật khẩu bắt buộc có ít nhất 1 kí tự viết thường";
				}
				elseif (!preg_match('@[^\w]@', $password)) {
					$passwordErr = "Mật khẩu phải có ít nhất 1 kí tự đặc biệt";
				}
			}
			elseif (!empty($_POST['password'])) {
				$cpasswordErr = "Mật khẩu xác nhận sai, vui lòng nhập lại";
			}
			else {
				$passwordErr = "Vui lòng nhập mật khẩu!";
			}
		}
		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
        }
        if(empty($nameErr)&&empty($emailErr)&&empty($passwordErr)&&empty($cpasswordErr)){
            require ('./../connect.php');
            if (isset($_POST['submit'])) {
            $password1 = md5($_POST['password']);
            $phone = $_POST['phone'];
            $queryCreate = "insert into users (username, email, password, phone) VALUES ('$name', '$email', '$password1', '$phone');";
            
            if ($conn->query($queryCreate) === TRUE) {
                header("Location: ./../index.php", false, 307);
            } else {
                echo "Error updating record: " . $conn->error;
            }
    
            $conn->close();
            }

        }
        
                
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/custom.scss.css?1617700723079">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617700723079">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        :root {
            --menuWidth: 260px;
            --leftColBackground: #fff;
            --lightLeftColBackground: #2d343a;
            --darkLeftColBackground: #22272b;
            --mainColor: #ff5e0a;
            --accentColor1: #929292;
            --accentColor2: #d80000;
            --textColor: #4c4c4c;
        }
        .btn-primary:hover, .btn-primary:active, .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled):active:focus {
        background-color: #ff5e0a;
        border-color: #ff5e0a;
        }
        .mew-control {
            width: 100%;
            background: rgba(255,255,255,0.2);
            border: none;
            outline: none;
            padding: 10px 20px;
            border-radius: 25px;
            letter-spacing: 1px;
            color: #fff;
            box-shadow: 0px 5px 15px rgb(0 0 0 / 5%);
        }
    </style>
</head>
<body>
<section class="register-layout d-flex align-items-center justify-content-center">
   <div class="box_log position-relative">
      <div class="square border-mew position-absolute squa-mew" style="--i:0;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:1;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:2;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:3;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:4;"></div>
      <div class="b_big position-relative pl-xl-5 pr-xl-5 pt-xl-4 pb-xl-4 p-3 border-mew squa-mew">
         <form accept-charset="utf-8" action="./../Login.php" id="customer_register" method="post">
            <input name="FormType" type="hidden" value="customer_register">
            <input name="utf8" type="hidden" value="true"><input type="hidden">
            		
            <h2 class="font-weight-bold mb-3 whites text-center">Đăng ký tài khoản</h2>
            <div class="form-signup text-danger mb-2 text-center">
            </div>
            <div class="form-group">
               <label for="firstName" class="d-none col-form-label">Họ Tên<span class="text-danger">*</span></label>
               <input type="text" placeholder="example" class="border-mew mew-control"  name="username" id="username">
               <span class="error"><?php echo $nameErr;?></span>
            </div>
            <div class="form-group">
               <label for="email" class="d-none col-form-label">Email<span class="text-danger">*</span></label>
               <input type="email" placeholder="Example@gmail.com" class="border-mew mew-control" name="email" id="email" >
               <span class="error"><?php echo $emailErr;?></span>

            </div>
            <div class="form-group">
               <label for="lastName" class="d-none col-form-label">Password<span class="text-danger">*</span></label>
               <input type="text" placeholder="BanHang@123" class="border-mew mew-control" name="password" id="password" >
               <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <div class="form-group">
               <label for="create_password" class="d-none col-form-label">Confirm Password<span class="text-danger">*</span></label>
               <input type="password" placeholder="BanHang@123" class="border-mew mew-control" name="cpassword" id="cpassword">
               <span class="error"><?php echo $cpasswordErr;?></span>
            </div>
            <div class="form-group">
               <label for="create_password" class="d-none col-form-label">Phone<span class="text-danger">*</span></label>
               <input type="text" class="border-mew mew-control" name="phone" id="phone" value="+84" >
               
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mb-2">
               <button type="submit" name="submit" class="btn btn-primary border-mew mew-control lk font-weight-bold" style="max-width: 100%;">Đăng ký</button>
            </div>
         </form>
         <div class="login_isocial">
            <div class="log_iso position-relative text-center">
               <span class="d-inline-block position-relative">Hoặc đăng nhập qua</span>
            </div>
            
            <div class="d-flex align-items-center justify-content-center">
               
            </div>
         </div>
         <div class="new-users mt-4">
            <div class="content">
               <div class="buttons-set text-center">
                  <a href="./../Login.php" title="Đăng nhập" class="btn btn-primary border-mew mew-control font-weight-bold mb-2">Đăng nhập</a>
                  <button class="btn btn-primary border-mew mew-control font-weight-bold" href="./../index.php">Quay về trang chủ</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</body>
</html>