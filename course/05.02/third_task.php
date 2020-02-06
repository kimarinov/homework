<?php  
$row = 5;
$coll = 10;
$arr = [];
$count=0;


for ($i=0; $i < $row; $i++) { 
	$count = ($i +1 ) *7;
	for ($j=0; $j < $coll; $j++) { 

		$arr[$i][$j]  = $count;
		$count += 110;
	}

}

for ($i=0; $i < $row; $i++) { 
	echo "<br>";
	for ($j=0; $j < $coll; $j++) { 
		echo $arr[$i][$j]. " ";
		
	}
}
