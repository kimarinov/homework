<?php 
include 'includes/header.php';

$unit_id = $_GET['id'];


$read_query = "SELECT * FROM test WHERE test_id= $unit_id";
				

$result = mysqli_query($conn, $read_query);
if ($result) {
	$row = mysqli_fetch_assoc($result);
}
?>


<form method="post">
	<p>Update unit</p>
		<input type="text" name="test_name" value="<?= $row['test_name']  ?>">
	<input type="hidden" name="test_id" value="<?= $row['test_id'] ?>">
	<input type="submit" name="submit" value="save" >

</form>
 
 <?php 
 if (!empty($_POST)) {
 	$test_name = $_POST['test_name'];
 	$test_id = $_POST['test_id'];

 	$update_query = "UPDATE `test` SET `test_name`='$test_name' WHERE `test_id`=$test_id";
 	
 	$update_result = mysqli_query($conn, $update_query); 
 	header("location: index.php");

 }

  ?>