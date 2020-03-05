<?php  
include 'includes/header.php';
?>
<form method="post" action="">
	<p>Enter unit</p>
	<input type="text" name="test_name">
	<input type="submit" name="submit" value="save">

</form>
<?php  
var_dump($_POST['test_name']);

if (isset($_POST['test_name'])) {
	$test_name = $_POST['test_name'];
}

$insurt_query = "INSERT INTO `test`(`test_name`) VALUES ('$test_name')";
$result = mysqli_query($conn, $insurt_query);
var_dump($result);
if ($result) {
	echo "Query successfuly";
}else{
die('Query failed'.mysqli_error($conn));
		}