<?php 
include 'includes/header.php';

$destinations_id = $_GET['id'];

$soft_restore = "UPDATE `destinations` SET `date_deleted`= NULL WHERE`destination_id` = $destinations_id";
$soft_restore_resoult = mysqli_query($conn, $soft_restore);

if ($soft_restore_resoult) {
	header("location: recycle_bin.php");
}
