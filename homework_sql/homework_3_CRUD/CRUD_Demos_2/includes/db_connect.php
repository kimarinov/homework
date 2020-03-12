<?php  

$connection = mysqli_connect('localhost', 'root', '', 'homework2');

if ($connection) {
	echo "Connect sucsessfull";
}else {
	die("Connect feiled". mysqli_connect_error($connection));
}
