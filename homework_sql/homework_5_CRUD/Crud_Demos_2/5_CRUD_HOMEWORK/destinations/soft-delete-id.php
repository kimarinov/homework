<?php
	include '../functions/db_connect.php';
	$sql = "UPDATE destinations SET date_deleted='2020-02-03' WHERE destination_id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	if ($result == true){
		header("Location: soft-delete.php");
	} else {
		echo 'There is a problem.';
	}
?>