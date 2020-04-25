<?php 
include '../includes/db_connect.php';


$restore_query = "UPDATE `meal_types` SET `date_deleted`= NULL WHERE `meal_type_id`=". $_GET['id'];

var_dump($restore_query);

$delete_res = mysqli_query($conn, $restore_query);

if( $delete_res ){
	header('Location: index.php');
} else {
	die('Update failed'.mysqli_error($conn));
}