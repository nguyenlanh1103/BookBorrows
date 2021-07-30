<?php

	require "./../../connect.php";
	$idxoa = $_GET['id'];

	// sql to delete a record
	$sql = "DELETE FROM users WHERE id='$idxoa'";

	if ($conn->query($sql) === TRUE) {
	    header("Location: ./../UserAdmin.php", false, 307);
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

$conn->close();
?>