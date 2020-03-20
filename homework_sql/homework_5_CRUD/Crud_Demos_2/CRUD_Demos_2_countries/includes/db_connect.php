<?php  

$conn = mysqli_connect('localhost', 'root', '', 'travel');

if (!$conn) {
	die(mysqli_connect_error($conn));
}else{
	echo "Connection successfully!";
	}

?>
