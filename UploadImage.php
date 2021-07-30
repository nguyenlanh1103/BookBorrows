<?php session_start(); ?>
<?php
$folder_path = 'uploads/';
$file_path = $folder_path . $_FILES["fileupload"]["name"];
$flag_ok = true;
if (isset($_POST["submit"])) {
    //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if ($check !== false) {

        $allowUpload = true;

        require('connect.php');
        $id = $_POST['id_book'];
        $booktitle = $_POST['booktitle'];
        $describes = $_POST['describes'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];
        $detail = $_POST['detail'];
        $img = $_FILES["fileupload"]["name"];
        $queryUpdate = "UPDATE books 
                            SET booktitle = '$booktitle', describes = '$describes', category_id= '$category', img = '$img' , quantity= '$quantity', detail='$detail'
                            WHERE id = '$id'";

        if ($conn->query($queryUpdate) === TRUE) {
            header("Location: admin/BookAdmin.php", false, 307);
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }
}

if (file_exists($file_path)) {
    echo 'file đã tồn tại ';
    $flag_ok = false;
}
$ex = array('jpg', 'png', 'jpeg', 'gif');
$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
if (!in_array($file_type, $ex)) {
    echo 'loại file không hợp lệ ';
    $flag_ok = false;
}
// check dung lượng file up lên 
if ($_FILES['fileupload']['size'] > 5000000) {
    echo 'dung lượng file quá lớn';
    $flag_ok = false;
}
if ($allowUpload) {
    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $file_path);
} else {
    echo 'không upload được file';
}
?>