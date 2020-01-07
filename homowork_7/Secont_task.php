<!DOCTYPE html>
<html html lang="en">
<head>
	<title>Homework7_Kaloyan</title>

</head>
<body>
<p> 
	<?php
		$var = 150;
		$sum;
		switch (true) {
			case($var > 250):
				$sum = ((50 * 0.1 ) + (100 * 0.15) + (100 *0.25 ) + (($var - 250) *0.35 )) * 1.2;
				echo "$sum";
				break;
			case($var <= 250):
				$sum = ((50 * 0.1 ) + (100 * 0.15) + (($var - 150) *0.25 )) * 1.2;
				echo "$sum";
				break;
			case ($var <= 150):
				$sum = ((50 * 0.1 ) + (($var - 50) * 0.15)) * 1.2;
				echo "$sum.00";
				break;
			case ($var <= 50):
				$sum = ($var * 0.1 )* 1.2;
				echo "$sum";
				break;
		}
	?>
</p>
<p>
	<?php	
	$var = 155;
	$sum;
	switch (true) {
		case($var > 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (100 *0.25 ) + (($var - 250) *0.35 )) * 1.2;
			echo "$sum";
			break;
		case($var <= 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (($var - 150) *0.25 )) * 1.2;
			echo "$sum";
			break;
		case ($var <= 150):
			$sum = ((50 * 0.1 ) + (($var - 50) * 0.15)) * 1.2;
			echo "$sum.00";
			break;
		case ($var >= 50):
			$sum = ($var * 0.1 )* 1.2;
			echo "$sum";
			break;
		}
	?>
</p>
</p>
<p>
	<?php	
	$var = 201;
	$sum;
	switch (true) {
		case($var > 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (100 *0.25 ) + (($var - 250) *0.35 )) * 1.2;
			echo "$sum";
			break;
		case($var <= 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (($var - 150) *0.25 )) * 1.2;
			echo "$sum";
			break;
		case ($var <= 150):
			$sum = ((50 * 0.1 ) + (($var - 50) * 0.15)) * 1.2;
			echo "$sum.00";
			break;
		case ($var >= 50):
			$sum = ($var * 0.1 )* 1.2;
			echo "$sum";
			break;
		}
	?>
</p>
</p>
<p>
	<?php	
	$var = 302;
	$sum;
	switch (true) {
		case($var > 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (100 *0.25 ) + (($var - 250) *0.35 )) * 1.2;
			echo "$sum";
			break;
		case($var <= 250):
			$sum = ((50 * 0.1 ) + (100 * 0.15) + (($var - 150) *0.25 )) * 1.2;
			echo "$sum";
			break;
		case ($var <= 150):
			$sum = ((50 * 0.1 ) + (($var - 50) * 0.15)) * 1.2;
			echo "$sum.00";
			break;
		case ($var >= 50):
			$sum = ($var * 0.1 )* 1.2;
			echo "$sum";
			break;
		}
	?>
</p>
</body>
</html>
