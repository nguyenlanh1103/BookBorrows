<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bootstrap-4-3-min.css?1616141527684">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679">
	<link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/ideal-image-slider.css">
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
	<link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" rel="stylesheet" >
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
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
         .pagination li {
               border-color: transparent;
         }
        .pagination li .page-link {
            min-width: 38px;
            color: var(--mainColor) !important;
            transition: all 0.3s ease;
         }
         .pagination li.active .page-link {
            border-color: var(--mainColor);
            color: var(--mainColor) !important;
         }
    </style>
</head>
<body>
<?php require_once('Header.php') ?>
<?php require_once('Menu.php')?>

<?php 
  require ('connect.php');

   $conn = mysqli_connect('localhost', 'root', '', 'qlythuviensach');

   $result = mysqli_query($conn, 'select count(id) as total from books');
   
   $row = mysqli_fetch_assoc($result); // hàm trả về mảng
   $total_records = $row['total'];
   
   $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Tìm limmit và current page
   $limit = 12;
   
   $total_page = ceil($total_records / $limit); // Tổng Số Trang

   if ($current_page > $total_page){
       $current_page = $total_page;
   }
   else if ($current_page < 1){
       $current_page = 1;
   }

   $start = ($current_page - 1) * $limit;


   $result = mysqli_query($conn, "SELECT * FROM books LIMIT $start, $limit");

?>
<div class="container">
<div class="category-products position-relative mt-4 mb-4">
   <h3>Trang Sản Phẩm Mượn Sách</h3><br>
   <div class="row slider-items">
   <?php  while ($row = mysqli_fetch_assoc($result)){?>
      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-3 col-6 product-grid-item-lm">
         <div class="product-item position-relative modal-open">
            <div class="sale-label sale-top-right position-absolute"><span class="font-weight-bold">-
               5% 
               </span>
            </div>
            <a href="Detail.php?id=<?php echo $row ['id']; ?>" class="thumb d-block" title="<?php echo $row['booktitle']?>">
               <div class="position-relative w-100 m-0 ratio2by3 flip has-edge aspect">
                  <img src="uploads/<?php echo $row['img']?>" class="d-block img img-cover position-absolute lazy loaded" >
               </div>
            </a>
            <div class="item-info mt-1 position-absolute text-center">
               <h3 class="item-title font-weight-bold"><a class="d-block modal-open pl-3 pr-3" href="Detail.php?id=<?php echo $row ['id']; ?>"><?php echo $row['booktitle']?></a></h3>
               <div class="item-price mb-1">
                  <span class="special-price font-weight-bold"><a href="./Cart/add.php?id=<?php echo $row["id"]; ?>&quantity=1">Mượn Sách</a></span>
                  
               </div>
               <a class="action font-weight-bold d-inline-block position-relative mt-1 mb-2" href="Detail.php?id=<?php echo $row ['id']; ?>" title="Chi tiết">Chi tiết</a>
            </div>
         </div>
      </div>
      <?php }?>
   </div>
</div>
<?php include './Pagination.php';?>
</div>


<?php require_once('Footer.php') ?>
    
</body>
</html>