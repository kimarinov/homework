<?php 

include 'includes/body.php';

$delete_query = "DELETE FROM `tests_2` WHERE `test_2_id` =".$_GET['id'];
$res_delete = mysqli_query($connection, $delete_query);
var_dump($delete_query);
header("location: index.php");
