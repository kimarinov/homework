<?php 
include 'includes/header.php';

$destinations_id = $_GET['id'];
$curent_date = date("Y-m-d");


$soft_delete = "UPDATE `destinations` SET `date_deleted`= '$curent_date' WHERE`destination_id` = $destinations_id";
$soft_delete_resoult = mysqli_query($conn, $soft_delete);

if ($soft_delete_resoult) {
	echo "Sucsses query";
	header("location: index.php");
}else{
	mysli_error($soft_delete_resoult);
}