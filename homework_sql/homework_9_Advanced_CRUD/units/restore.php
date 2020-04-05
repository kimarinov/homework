<?php 
include '../includes/db_connect.php';


$update_query = "UPDATE `units` SET `date_deleted` = NULL WHERE unit_id= " . $_GET['id'];
var_dump($update_query);
$res = mysqli_query($conn, $update_query);

if($res){
	header('Location: recycle_bin.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}