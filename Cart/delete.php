<?php 
    session_start();
    $product_id = $_GET['id'];
    //xoa san pham
	if(isset($_SESSION['cart'][$product_id])){
		unset($_SESSION['cart'][$product_id]);
	}
	header("location: ./cartDetail.php");
?>