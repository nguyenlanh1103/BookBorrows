<?php session_start(); ?>
<pre>
<?php
// unset($_SESSION['cart']);
    $product_id = $_GET['id'];
    $quantity = $_GET['quantity'];    
    
    if (isset($_SESSION['cart']))
    {
        if (isset($_SESSION['cart'][$product_id])){
            $tempQuantity = $_SESSION['cart'][$product_id] + 1;
            $_SESSION['cart'][$product_id] = $tempQuantity;
            header("Location: ./cartDetail.php");
        }
        else {
            $_SESSION['cart'][$product_id] = $quantity;
            header("Location: ./cartDetail.php");
        }
    } else {
        // ngược lại không có sản phẩm nào trong giỏ , thì tiến hành thêm vào  
        $_SESSION['cart'] = array($product_id => $quantity);
        
        // $_SESSION['cart'] = [];
        // array_push($_SESSION['cart'],  ['id'=>$_GET['id'], 'quantity'=>$_GET['quantity']]);
        header("Location: ./cartDetail.php");
    }
    
?>