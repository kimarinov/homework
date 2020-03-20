<?php 
include 'includes/header.php';

$country_id = $_GET['id'];

$soft_restore = "UPDATE `countries` SET `date_deleted`= NULL WHERE`country_id` = $country_id";
$soft_restore_resoult = mysqli_query($conn, $soft_restore);

if ($soft_restore_resoult) {
	header("location: recycle_bin.php");
}