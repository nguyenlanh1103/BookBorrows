<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
        header('Location: index.php');
    } elseif(isset($_SESSION['adminname'])) {
        header('Location: MasterPageAdmin.php');
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
<section class="login-layout d-flex align-items-center justify-content-center" style="background: linear-gradient(to bottom, #ff5e0a , #bc9aff);">
   <div class="box_log position-relative">
      <div class="square border-mew position-absolute squa-mew" style="--i:0;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:1;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:2;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:3;"></div>
      <div class="square border-mew position-absolute squa-mew" style="--i:4;"></div>
      <div class="b_big position-relative pl-xl-5 pr-xl-5 pt-xl-4 pb-xl-4 p-3 border-mew squa-mew">
         <div class="registered-users">
            <div class="content">
               <form accept-charset="utf-8" action="" id="customer_login" method="post">

                  <h3 class="font-weight-bold mb-3 whites text-center">Đăng nhập</h3>
                  <div class="form-group">
                     <label for="name" class="col-form-label d-none">UserName<span class="text-danger">*</span></label>
                     <input type="text" name="username" id="name" placeholder="Username" class="border-mew mew-control">
                  </div>
                  <div class="form-group">
                     <label for="name" class="d-none col-form-label">Mật khẩu<span class="text-danger">*</span></label>
                     <input type="text" name="password" id="name" placeholder="Mật khẩu" class="border-mew mew-control" >
                  </div>
                  <div class="form-group d-flex justify-content-between align-items-center">
                    <input type="submit" name="submit" value="Đăng Nhập" class="btn btn-primary border-mew mew-control lk font-weight-bold">
                     <a href="./SendMail.php" class="whites font-weight-bold" onclick="toggleRecoverPasswordForm();return false;" id="RecoverPassword">Quên mật khẩu?</a>
                  </div>
                  <div class="form-error text-left mb-4 text-danger">
                  </div>
               </form>
               <!-- <form accept-charset="utf-8"  id="recover_customer_password" method="post">
                  <input name="FormType" type="hidden" value="recover_customer_password">
                  <input name="utf8" type="hidden" value="true">					
                  <div id="recover_password" class="d-none">
                     <h3 class="font-weight-bold mb-3 whites text-center">Đặt lại mật khẩu</h3>
                     <p class="line_cus whites text-center">Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>
                     <div class="form-error mb-4 text-danger">
                     </div>
                     <div class="form-group">
                        <label for="customer_email1" class="col-form-label d-none">Email<span class="text-danger">*</span></label>
                        <input type="email" class="border-mew mew-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="customer_email1" required="">
                     </div>
                     <div class="form-group d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-primary border-mew mew-control lk font-weight-bold">Gửi</button>
                        <a href="#" class="whites font-weight-bold" onclick="toggleRecoverPasswordForm();return false;" title="Huỷ">Hủy</a>
                     </div>
                  </div>
               </form> -->
               <div class="login_isocial">
                  <div class="log_iso position-relative text-center">
                     <span class="d-inline-block position-relative">Hoặc đăng nhập qua</span>
                  </div>
                  <script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script> 
                  <div class="d-flex align-items-center justify-content-center">
                     <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a> 
                     <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="new-users">
            <h3 class="font-weight-bold mb-3 mt-4 whites text-center">Đăng ký</h3>
            <div class="content">
               <p class="line_cus whites text-center">Tạo tài khoản để quản lý đơn hàng, và các thông tin thanh toán, gửi hàng một cách đơn giản hơn.</p>
               <div class="buttons-set text-center">
                  <button class="btn btn-primary border-mew mew-control font-weight-bold mb-2" onclick="window.location.href='register.php'">Tạo tài khoản</button>
                  <button class="btn btn-primary border-mew mew-control font-weight-bold" onclick="window.location.href='/'">Quay về trang chủ</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</body>
</html>

<?php
    require ('connect.php');
    if(isset($_POST['submit'])){
        $users = $_POST['username'];
        $password = $_POST['password'];
        $test = md5($_POST['password']);
        $sql = "SELECT * FROM users WHERE username='$users' AND password= '$test'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result) > 0){
            while($row = $result->fetch_assoc()){
                if($row['role']=='admin') {
                    $_SESSION['adminname'] = $users;
                    header('Location: MasterPageAdmin.php');
                }
                else {
                    $_SESSION['username'] = $users;
                    header('Location: index.php');
                }
            }
        }else{
            
            echo "Mat Khau sai!!!";
        }
    }
    if(isset($_POST['submit'])){
       
    }
?>