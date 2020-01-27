<?php

function Count_Number_in_array($A, $num ){
	$count = null;
	for ($i=0; $i < count($A) ; $i++) { 
		if ($A[$i] == $num) {
			$count++;
		}

	}
	if ($count == 0) {
		echo "not in array";
	}

	echo "$count ";
}

$A = [2, 11, 2, 3, 0, 2];
$num = 2;
Count_Number_in_array($A, $num);

$A = [0, 4, 7, 0, 0, 0];
$num = 0;
Count_Number_in_array($A, $num);

$A = [4, 15, 27, 33, 1];
$num = 8;
Count_Number_in_array($A, $num);



