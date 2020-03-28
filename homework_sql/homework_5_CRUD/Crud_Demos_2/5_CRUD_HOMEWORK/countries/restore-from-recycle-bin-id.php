<?php
	include '../functions/db_connect.php';
	$sql = "UPDATE countries SET date_deleted=NULL WHERE country_id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	if ($result == true){
		header("Location: restore-from-recycle-bin.php");
	} else {
		echo 'There is a problem.';
	}
?>