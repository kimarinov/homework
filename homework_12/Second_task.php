<?php  

function Print_Biger_element ($A){
	$flag = true;
	for ($i=0; $i < count($A) ; $i++) { 
		if ($i > 0) {
			if (($A[$i-1] < $A[$i]) &&  ($A[$i+1] < $A[$i])) {
				echo "$i ";
				$flag = false;
				break;
			}
			
		}
		if ($i == 0) {
			if (($A[count($A) - 1] < $A[$i]) &&  ($A[$i+1] < $A[$i])) {
				echo "$i ";
				break;
				$flag = false;
			}
		}
		if ($i == (count($A) - 1)) {
			if (($A[count($A) - 1] < $A[$i]) &&  ($A[$i+1] < $A[$i])) {
				echo "$i ";
				break;
				$flag = false;
			}
		}
	}
	if ($flag ==true) {
		echo "No such element";
	}

}

$A = [2, 11, 2, 3, 0, 2 ];
Print_Biger_element($A);

$A = [0, 4, 7, 0, 0, 0, ];
Print_Biger_element($A);

$A = [4, 15, 27, 33, 1, ];
Print_Biger_element($A);

$A = [1, 1, 1, 1, ];
Print_Biger_element($A);

$A = [27, 22, 11, 4 ];
Print_Biger_element($A);


