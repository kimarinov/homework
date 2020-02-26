<?php  

function Avagadro()
{
	$first_number = 100;
	$second_number = 999;

	for ($j=$first_number; $j < $second_number; $j++) { 
		$number = $j;
		$total = 0;
		$temp = $number;
		$count = 0;
		for ($i=0; $i <= 2; $i++) { 
			$temp2 = $temp % 10; 
			$total = $total + pow($temp2, 3);
			$temp /=10;
			$count++;
			if (($total == $number) && ($count == 3)) {
			echo "$j ";
			}
		}
	}
}

Avagadro();

