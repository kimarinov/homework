<?php 
$num = $_POST['num'];
$number1 = 7;
if (is_numeric($number1) && (1 <= $num) && ($num <=10)) {
	if ($num == $number1) {
		echo "You guess the number!";
		}
	elseif ($num < 7) {
		echo "The number is smaller";
	}
	elseif ($num > 7) {
		echo "The number is biger";
	}
	
}
else {
	echo "Not valid input!";
}

