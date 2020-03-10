<?php  
include 'includes/header.php';

$curent_date = date('Y-m-d');

$update_query ="UPDATE `test` SET `date_deleted` ='$curent_date' WHERE `test_id` =".$_GET['id'];

$res = mysqli_query($conn, $update_query);
if ($res) {
	header("location: index.php");
}else{
	die(mysql_error($conn));
}