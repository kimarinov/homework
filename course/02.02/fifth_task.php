<?php  


function Most_Friquence_element_in_array($arr) {
	$temp = 1;
	$temp1 = 1;
	if (!empty($arr)) {
	
	for ($j=0; $j < count($arr) - 1; $j++) { 
			
		if (($arr[$j] < $arr[$j + 1]) ){
			$temp++;
		}
	 	elseif ($temp1 < $temp) {
	 		$temp1 = $temp;
	 	 	$temp = 1;
	 	}
	 
	}
	 echo "$temp1 "; 
	}
	if (empty($arr)) {
		echo "Empty array";
	}
}

$arr = [4, 0, 15, 27, 33, 1];
Most_Friquence_element_in_array($arr);