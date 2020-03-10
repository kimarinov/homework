<?php 
include 'includes/header.php';

$test_id = $_GET['id'];
$update_query_restore = "UPDATE `test` SET `date_deleted`=NULL  WHERE `test_id`=$test_id";
var_dump($update_query_restore);
$update_result = mysqli_query($conn, $update_query_restore);





$restore_all_query = "UPDATE `test` SET `date_deleted`=NULL WHERE `date_deleted` is not  null";
