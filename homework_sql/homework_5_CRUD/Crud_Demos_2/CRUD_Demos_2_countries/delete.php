<?php 
include 'includes/header.php';

$delete_query = "DELETE FROM countries WHERE `country_id`=".$_GET['id'] ;
var_dump($delete_query);

$delete_res = mysqli_query($conn, $delete_query);

if( $delete_res ){
	header('Location: index.php');
} 
	else {
	die('Deletion failed'.mysqli_error($conn));
}