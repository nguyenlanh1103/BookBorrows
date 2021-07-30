<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<script>
			var option = confirm('Bạn Có Chắc Chắn Muốn Xóa Sản Phẩm Này Không')
			if (confirm('Sản phẩm có liên kết với khóa chính ! Không thể xóa bỏ')) {
				document.write('Sản Phẩm Có Mối Ràng Buộc!');
			} else {
				document.write('Error deleting record');
			}
	</script>
	

</body>
</html>
<?php

	require "./../../connect.php";
	$idxoa = $_GET['id'];

	// sql to delete a record
	$sql = "DELETE FROM categorys WHERE id='$idxoa'";

	if ($conn->query($sql) === TRUE) {
	    header("Location: ./../CategoryAdmin.php", false, 307);
	} else {
	    echo "Error deleting record: " . $conn->error;
		
	}

$conn->close();

?>