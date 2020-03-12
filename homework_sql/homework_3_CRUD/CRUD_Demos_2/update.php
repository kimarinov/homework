<?php  

include 'includes/body.php';
$test_id = $_GET['id'];
$read_query = "SELECT * FROM tests_2 WHERE test_2_id= $test_id";

$result = mysqli_query($connection, $read_query);

if ($result) {
	$row = mysqli_fetch_assoc($result);
}else{
	die("Connection error "  .mysqli_error($result));
}

?>

<form method="post">
	<p>Update unit</p>
	<input type="text" name="update_test_name" value="<?= $row['test_2_name'] ?>">
	<input type="hidden" name="test_2_id" value="<?= $row['test_2_id'] ?>">
	<input type="submit" name="" >

</form>

<?php  
if (!empty($_POST)) {
	$test_2_name = $_POST['update_test_name'];
	$test_2_id = $_POST['test_2_id'];

	$update_query = "UPDATE tests_2 SET test_2_name='$test_2_name' WHERE test_2_id = $test_2_id";	
	$update_result = mysqli_query($connection, $update_query);
	header("location: index.php");
	

	}
