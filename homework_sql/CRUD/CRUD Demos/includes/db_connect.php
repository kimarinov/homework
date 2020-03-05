<?php  

$conn = mysqli_connect('localhost', 'root', '','homework2');

if (!$conn) {
	die("conection failed". mysqli_connect_error(). ' - '. mysqli_connect_errno());
} else{
	echo "Connect sucsessfully";
}

?>

