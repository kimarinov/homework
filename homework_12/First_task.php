<?php  

function Print_Value_Key ($A){

	foreach ($A as $key => $value1) {
		foreach ($value1 as $key => $value) {
			echo "[$key]=> $value ";
		}
	}	

}

$b =[
	[4, 15, 2],
	[20, 9 , 4],
];

Print_Value_Key($b);
echo "<br>";

$A = [['arr', 1], [1, 8, 'demo array'], ['true'],];

Print_Value_Key($A);
