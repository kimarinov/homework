<?php  
include 'includes/body.php';
$test_2_index = $_GET['id'];

$update_query = "UPDATE tests_2 SET test_2_deleted = '0001-11-11' WHERE test_2_id = $test_2_index";
$upd_res= mysqli_query($connection, $update_query);

if ($upd_res) {
	header("location: index.php");
}else{
	die(mysql_error($connection));
}


