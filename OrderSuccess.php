<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
    <!-- <link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" > -->
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/376/967/themes/751286/assets/mewint_css.scss.css?1617247297894">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/376/967/themes/751286/assets/cart_style.scss.css?1617766164168">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
</head>
<body>
<?php
if(!isset($_SESSION['cart'])) {
    header('Location: ./ThanksForOder.php');
}else{
    unset($_SESSION['cart']);
}

// Load các thư viện (packages) do Composer quản lý vào chương trình
include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/OAuth.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";

// Sử dụng thư viện PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (session_id() === '') {
    
    session_start();
}
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: Login.php');
    die;
} else {
    // Nếu giỏ hàng trong session rỗng, return
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo 'Giỏ hàng rỗng. Vui lòng chọn Sản phẩm trước khi Thanh toán!';
        die;
    }


    include_once(__DIR__ . './connect.php');
    $username = $_SESSION['username'];
    $sqlSelectUser = <<<EOT
        SELECT *
        FROM `users` user
        WHERE user.username = '$username'
EOT;


  
    $resultSelectUser = mysqli_query($conn, $sqlSelectUser);
    $UserRow;
    while ($row = mysqli_fetch_array($resultSelectUser, MYSQLI_ASSOC)) {
            $UserRow = array(
            'username' => $row['username'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'address' => $row['address'],
        );
    }

    $dateset = date('Y-m-d'); // Lấy ngày lập theo định dạng yyyy-mm-dd
    $deliverydate = date('Y-m-d');  // Lấy ngày giao
    $placeofdelivery = ''; // Lấy Địa điểm giao hàng
    $paymentstatus = 0; // Mặc định là 0 chưa thanh toán
    $id_dh = 1; // Mặc định là 1


    $sqlInsertDonHang = <<<EOT
    INSERT INTO `order_items` (`dateset`, ` deliverydate`, `placeofdelivery`, `paymentstatus`, `id_dh`) 
        VALUES ('$dateset', '$deliverydate', N'$placeofdelivery', '$paymentstatus', '$id_dh');
EOT;
    // Thực thi INSERT Đơn hàng
    mysqli_query($conn, $sqlInsertDonHang);

    
    $id_dh = $conn->insert_id;

    // Thông tin các dòng chi tiết đơn hàng
    $cart = $_SESSION['cart'];
    require('connect.php');
    $query = "SELECT * FROM books  WHERE id= '$x' ";
    // Duyệt vòng lặp qua mảng các dòng Sản phẩm của chi tiết đơn hàng được gởi đến qua request POST
    foreach ($cart as $row) {
        $x = $row['id'];
        $booktitle = $row['booktitle'];
        $quantity = $row['quantity'];
        $sqlInsertSanPhamDonDatHang = <<<EOT
        INSERT INTO `books` (`id`, `booktitle`, `quantity`) 
            VALUES ($id, $booktitle, $quantity);
EOT;

        // Thực thi INSERT
        mysqli_query($conn, $sqlInsertSanPhamDonDatHang);
    }

    // 5. Gởi mail thông báo cho khách hàng về Đơn hàng đã đặt
    $mail = new PHPMailer(true);                                
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                   
        $mail->isSMTP();                                       
        $mail->Host = 'smtp.gmail.com';                         
        $mail->SMTPAuth = true;                                 
        $mail->Username = 'nguyenlanh1040@gmail.com'; 
        $mail->Password = 'lanhpro123';                   
        $mail->SMTPSecure = 'tls';                              
        $mail->Port = 587;                                      
        $mail->CharSet = "UTF-8";
        // Bật chế độ tự mình mã hóa SSL
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Người nhận
        $mail->setFrom('nguyenlanh1040@gmail.com', 'Mail Liên hệ');
        $mail->addAddress($UserRow['email']);   
       
        //set email html
        $mail->isHTML(true);   

        // Tiêu đề Mail

        $mail->Subject = "[Có đơn hàng vừa thanh toán][cảm ơn quý khách đã tin cậy.] - Mã đơn hàng #$id_dh";

        $query = "SELECT * FROM users ;";
        $templateDonHang  = $conn->query($query);
        $templateDonHang = '<ul class="bg-danger text-center">';
        $templateDonHang .= '<li>Họ tên khách hàng: ' . $UserRow['username'] . '</li>';
        $templateDonHang .= '<li>Địa chỉ khách hàng: ' . $UserRow['address'] . '</li>';
        $templateDonHang .= '<ul>';

        
        $stt =1;
        $templateChiTietDonHang = '<table border="1" width="100%">';
        $templateChiTietDonHang .= '<tr>';
        $templateChiTietDonHang .= '<td>STT</td>';
        $templateChiTietDonHang .= '<td>ID</td>';
        $templateChiTietDonHang .= '<td>Ảnh sản phẩm</td>';
        $templateChiTietDonHang .= '<td>Tên Sách</td>';
        $templateChiTietDonHang .= '<td>Số lượng</td>';
        $templateChiTietDonHang .= '</tr>';
        foreach ($cart as $x => $x_value) {
            require('connect.php');
            $query = "SELECT * FROM books  WHERE id= '$x'";
            $book  = $conn->query($query);
            if ($book->num_rows > 0) {
                while ($row = $book->fetch_assoc()) { 
            $templateChiTietDonHang .= '<tr>';
            $templateChiTietDonHang .= '<td>' . $stt . '</td>';
            $templateChiTietDonHang .= '<td>' . $x. '</td>';
            $templateChiTietDonHang .= '<td><img style="width: 75;" alt="" src=" .$row["img"]. "></td>';
            $templateChiTietDonHang .= '<td>' . $row['booktitle'] . '</td>';
            $templateChiTietDonHang .= '<td>' . $x_value['quantity'] . '</td>';
            $templateChiTietDonHang .= '</tr>';
            $stt++;
        }
        
        }
    }
    $templateChiTietDonHang .= '</table>';
    $templateChiTietDonHang .= 'Tổng Sách: '  . (array_sum($_SESSION['cart'])) . '';
    
        $body = <<<EOT
            <table border="1" width="100%">
                <tr>
                    <td colspan="2">
                        <img src="https://sachweb.com/content/img/logosw.png" style="width: 100px; height: 100px; border: 1px solid red;" />
                    </td>
                </tr>
                <tr>
                    <td>Có Đơn hàng vừa thanh toán</td>
                    <td>
                        <h2>Thông tin đơn hàng</h2>
                        $templateDonHang

                        <h2>Chi tiết đơn hàng</h2>
                        $templateChiTietDonHang
                    </td>
                </td>
            </table>
EOT;
$templateChiTietDonHang .= '<td>' . (array_sum($_SESSION['cart'])) . '</td>';
        $mail->Body    = $body;
        $mail->send();
    } catch (Exception $e) {
        echo 'Lỗi khi gởi mail: ', $mail->ErrorInfo;
    }

    // 5. Thực thi hoàn tất, điều hướng về trang Danh sách
    // Hủy dữ liệu giỏ hàng trong session
    unset($_SESSION['cart']);
    echo 'Đặt hàng thành công. <a href="index.php">Bấm vào đây để quay về trang chủ</a>';
    
} 
?>
</body>
</html>
