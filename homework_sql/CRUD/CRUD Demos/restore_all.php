<?php 
include 'includes/header.php';

$restore_all_query = "UPDATE `test` SET `date_deleted`=NULL WHERE `date_deleted` is not  null";
$restore_all_Result = mysqli_query($conn, $restore_all_query);
header("location: index.php");