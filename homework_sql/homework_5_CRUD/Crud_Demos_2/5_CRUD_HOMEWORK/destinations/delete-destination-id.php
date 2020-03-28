<?php
	include '../functions/db_connect.php';
	$sql = "DELETE FROM destinations WHERE destination_id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	if ($result == true){
		header("Location: delete-destination.php");
	} else {
		echo 'There is a problem.';
	}
?>