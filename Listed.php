<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./swiper/css/bootstrap_css.css">
    <link rel="stylesheet" href="./swiper/css/bootstrap-4-3-min.css">
    <link rel="stylesheet" href="style.css">
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
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/noindex.scss.css?1617700723079">
    <style>
        :root {
            --mainColor: #ff5e0a;
        }
    </style>
</head>
<body>
<?php require_once('./Header.php');?>
<div class="breadcrumbs position-relative pl-4 pr-4 pt-4 pb-4 lazy_bg loaded" >
  <div class="inner position-relative text-center">

    <h1 class="cat-heading d-none d-md-block">Tìm kiếm</h1>
    <ul class="breadcrumb align-items-center justify-content-center m-0">
      <li class="home">
        <a href="index.php" title="SachWeb">Trang chủ</a>						
        <img src="./images/right-arrow.png" alt="Sachweb">
      </li>
      <li class="font-weight-bold">Đơn Hàng</li>
    </ul>
  </div>
</div>
<p>Liệt kê đơn hàng</p>
<?php
  require ('connect.php');
	$query = "SELECT orders.*, books.*, order_details.quantity
  FROM orders
  INNER JOIN order_details ON order_details.order_id = orders.id
  INNER JOIN books ON books.id = order_details.book_id";
	$book  = $conn->query($query);
?>
<table id="example2" class="table table-bordered table-hover">
  <thead>
    <tr class="bg-danger text-center">
      <th>Id</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Email</th>
      <th>Số điện thoại</th>
      <th>ngày Lập</th>                            
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($book as $row){
  ?>
  <tr>
  	<td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
   	<td>
   		<a href="ViewOder.php?action=donhang&query=xemdonhang&code=<?php echo $row['id'] ?>">Xem đơn hàng</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
  </tbody>
</table><br>

<?php require_once('./Footer.php');?>
</body>
</html>