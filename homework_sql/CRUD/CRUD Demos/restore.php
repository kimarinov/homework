<?php 
include 'includes/header.php';

$test_id = $_GET['id'];
$update_query_restore = "UPDATE `test` SET `date_deleted`=NULL  WHERE `test_id`=$test_id";
$update_result = mysqli_query($conn, $update_query_restore);
header("location: recyvle_bin.php");



