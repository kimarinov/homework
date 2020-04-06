<?php 
include '../includes/db_connect.php';
include '../includes/header_inner.php';

$new_recipe_name = $_POST['recipe_name'];
$new_recipe_prep_time = $_POST['recipe_prep_time'];
$new_recipe_descr = $_POST['recipe_descr'];

$insurt_query = "INSERT INTO `recipes`(`recipe_name`, `recipe_descr`, `prep_time`, `date_added`, `meal_type_id`) VALUES ('$new_recipe_name', '$new_recipe_descr','$new_recipe_prep_time', '" . date('Y-m-d') . "' , 1)";
$insurt_Result = mysqli_query($conn, $insurt_query);




 ?>