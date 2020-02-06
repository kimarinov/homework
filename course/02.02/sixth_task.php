<?php  

$row = 4;
$coll = 4;
$arr = [];
$count=1;


for ($i=0; $i < $row; $i++) { 
	for ($j=0; $j < $coll; $j++) { 


		if ($i%2 == 0) {
			$arr[$j][$i] = $count;
			$count++;
		}
		else{
			$arr[$count2][$i] = $count;
			$count++;
			$count2--;
		}

	}
	 $count2 = $coll - 1  ;

}

for ($i=0; $i < $row; $i++) { 
	echo "<br>";
	for ($j=0; $j < $coll; $j++) { 
		echo $arr[$i][$j]. " ";
		
	}
}


$row = 5;
$coll = 4;
$arr = [];
$count=1;


for ($i=0; $i < $coll; $i++) { 
	for ($j=0; $j < $row; $j++) { 

		$arr[$j][$i] = $count;
		$count +=3;
		
	}

}

for ($i=0; $i < $row; $i++) { 
	echo "<br>";
	for ($j=0; $j < $coll; $j++) { 
		echo $arr[$i][$j]. " ";
		
	}
}