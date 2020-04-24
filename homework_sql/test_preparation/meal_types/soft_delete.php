<?php 
include '../includes/header_inner.php';

$update_query = "UPDATE `meal_types` SET `date_deleted`= NOW() WHERE meal_type_id=". $_GET['id'];

$res = mysqli_query($conn, $update_query);

if($res){
	header('Location: index.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}