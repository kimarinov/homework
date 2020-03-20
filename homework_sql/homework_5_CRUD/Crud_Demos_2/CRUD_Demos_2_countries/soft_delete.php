<?php 

include 'includes/header.php';
$country_id = $_GET['id'];
$curent_date = date("Y-m-d");


$soft_delete = "UPDATE `countries` SET `date_deleted`= '$curent_date' WHERE country_id =$country_id";
$soft_delete_resoult = mysqli_query($conn, $soft_delete);

if ($soft_delete_resoult) {
	echo "Sucsses query";
	header("location: index.php");
}else{
	mysli_error($soft_delete_resoult);
}