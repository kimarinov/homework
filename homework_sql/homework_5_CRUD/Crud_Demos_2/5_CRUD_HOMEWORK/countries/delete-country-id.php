<?php
	include '../functions/db_connect.php';
	$sql = "DELETE FROM countries WHERE country_id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	if ($result == true){
		header("Location: delete-country.php");
	} else {
		echo 'There is a problem.';
	}
?>