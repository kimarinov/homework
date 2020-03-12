<?php  

include 'includes/body.php';

?>

<form method="post">
	<input type="text" name="test_2_name">
	<input type="submit" name="submit" value="save">
</form>

<?php  
if (isset($_POST['test_2_name'])) {
	$test_2_name = $_POST['test_2_name'];
}

$insurt_query = "INSERT INTO `tests_2`(`test_2_name`) VALUES ('$test_2_name')";

$result = mysqli_query($connection, $insurt_query);
if ($result) {
	echo "Connection sucssesful!";
}else{
	die(mysqli_error($result));
}