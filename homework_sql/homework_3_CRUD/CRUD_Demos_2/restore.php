<?php  

include 'includes/body.php';

$test_id = $_GET['id'];
$update_query_restore = "UPDATE `tests_2` SET `test_2_deleted`= NULL  WHERE `test_2_id`=$test_id";
$update_result = mysqli_query($connection, $update_query_restore);
if ($update_result) {
	echo "string";
}
header("location: recycle_bin.php");