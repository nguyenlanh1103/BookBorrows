
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<div class="col-left position-fixed d-flex flex-column pt-lg-2 pb-lg-2 pt-0 pb-0" id="col-left">
   <div class="wraphead_mobile clearfix d-none d-lg-block d-xl-block">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12">
               <div class="header-main">
                  <div class="wrap_main d-none d-lg-block d-xl-block">
                     <div class="header-nav">
                        <ul class="item_big nav-left hidden-xs hidden-sm">
                           <li class="nav-item  ">
                              <a href="index.php" class="class"> Trang Chủ</a>
                           </li>
                           <li class="nav-item">
                              <a href="Gioi-Thieu.php" class="class"> Giới Thiệu</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Danh Sách Các Loại Sách
                              </a>
                              <div class="dropdown-menu">
                                 <?php 
                                    require('./DBdata.php');
                                    $xau = '';
                                    $arr = getArr1();
                                       for ($i= 0; $i < count($arr); $i++) {
                                          $xau .= '<a class="dropdown-item" href="index.php?id='.
                                          $arr[$i]->id.'">'.$arr[$i]->booktitle.'</a>';
                                       }
                                       $xau.='</div>';
                                       
                                    echo $xau;               
                                 ?>  
                                 
      
                           </li>
                           <li class="nav-item">
                              <a href="Sharing-Skills.php" class="class"> Chia Sẻ Kĩ Năng</a>
                           </li>
                           <li class="nav-item">
                              <a href="./BookLoanPage.php" class="class"> Tất Cả Sản Phẩm</a>
                           </li>
                           <li class="nav-item">
                              <a href="Lien-He.php" class="class"> Liên Hệ</a>
                           </li>
                        </ul>
                        
                        <ul class="item_big nav-right hidden-xs hidden-sm">
                           <li class="nav-item dropdown">
                              <a class="a-img" id="navbardrop" data-toggle="dropdown">
                                 Login
                                 
                                 <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm8.127 19.41c-.282-.401-.772-.654-1.624-.85-3.848-.906-4.097-1.501-4.352-2.059-.259-.565-.19-1.23.205-1.977 1.726-3.257 2.09-6.024 1.027-7.79-.674-1.119-1.875-1.734-3.383-1.734-1.521 0-2.732.626-3.409 1.763-1.066 1.789-.693 4.544 1.049 7.757.402.742.476 1.406.22 1.974-.265.586-.611 1.19-4.365 2.066-.852.196-1.342.449-1.623.848 2.012 2.207 4.91 3.592 8.128 3.592s6.115-1.385 8.127-3.59zm.65-.782c1.395-1.844 2.223-4.14 2.223-6.628 0-6.071-4.929-11-11-11s-11 4.929-11 11c0 2.487.827 4.783 2.222 6.626.409-.452 1.049-.81 2.049-1.041 2.025-.462 3.376-.836 3.678-1.502.122-.272.061-.628-.188-1.087-1.917-3.535-2.282-6.641-1.03-8.745.853-1.431 2.408-2.251 4.269-2.251 1.845 0 3.391.808 4.24 2.218 1.251 2.079.896 5.195-1 8.774-.245.463-.304.821-.179 1.094.305.668 1.644 1.038 3.667 1.499 1 .23 1.64.59 2.049 1.043z"></path>
                                 </svg>
                                 <div class="dropdown-menu">
                                    <a href="Login.php" class="item_login d-block pt-1 pb-1">Đăng Nhập</a>
                                    <a href="./Register.php" class="item_login d-block pt-1 pb-1">Đăng Kí</a>
                                    
                                 </div>
                              </a>
                              
                           </li>
                        </ul>
                        <?php if(isset($_SESSION['username'])) {?>
                        <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0">
                           <li class="nav-item ">
                                 <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"  href="./UserInformation.php"> <?php echo "Xin chào ". $_SESSION['username']; ?></a>
                           </li>
                           <li>
                              <a class="nav-link" href="Logout.php">Logout</a>
                              <a class="nav-link" href="UserInformation.php">Thông Tin</a>
                           </li>
                        </ul>
                        <?php } ?>
                  
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      
  
   </div>
</div>

</body>
</html>