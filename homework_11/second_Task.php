<?php  
$arr = [];
$m = 4;
$n = 5;
$num = 3;

for ($i=0; $i <= $m; $i++) { 
	for ($j=0; $j <= $n; $j++) { 
		$arr[$i][$j] = $num;
		$num += 2;
		if ($j == $n) {
			$num = (($arr[$i][$j] * 2) - 2);
		}
	}
}
echo "<table border = 1>";

for ($row=0; $row < $m; $row++) { 
	echo "<tr>";
	for ($col=0; $col < $n; $col++) { 
		echo "<td>". $arr[$row][$col]."</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<br>";
$arr = [];
$m = 5;
$n = 4;
$num = 1;

for ($i=0; $i <= $m; $i++) { 


	for ($j=0; $j <= $n; $j++) { 
		
		$arr[$j][$i] = $num;
		$num +=3;
	
	}
}
echo "<table border = 1>";

for ($row=0; $row < $m; $row++) { 
	echo "<tr>";
	for ($col=0; $col < $n; $col++) { 
		echo "<td>". $arr[$row][$col]."</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<br>";

$arr = [];
$n = 4;
$m = 4;
$num = 1;

for ($i=0; $i < $m; $i++) { 
	
	for ($j=0 ; $j < $n; $j++ ) { 
		if ($i % 2 == 0) {
			$arr[$i][$j] = $num;
		}
		elseif ($i % 2 != 0) {
			$arr[$i][$n - ($j + 1)] = $num;	
		}
		$num++;
		
	}
}

echo "<table border = 1>";

for ($row=0; $row < $m; $row++) { 
	echo "<tr>";
	for ($col=0; $col < $n; $col++) { 
		echo "<td>". $arr[$row][$col]."</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<br>";

$arr = [];
$n = 5;
$m = 5;
$num = 1;

for ($i=$m; $i > 0 ; $i--) { 
	for ($j=$n; $j > 0; $j--) { 
		$arr[$j-1][$i -1] = $num;
		$num++;
	}
}

echo "<table border = 1>";

for ($row=0; $row < $m; $row++) { 
	echo "<tr>";
	for ($col=0; $col < $n; $col++) { 
		echo "<td>". $arr[$row][$col]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
