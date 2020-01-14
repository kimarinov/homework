<?php
		$var = 155;
		$sum;
		$price50 = 0.1;
		$price150 = 0.15;
		$price250 = 0.25;
		$price251 =0.35;
		switch ($var) {
			case($var > 250):
				$sum = ((50 * $price50 ) + (100 * $price150) + (100 *$price250 ) + (($var - 250) * $price251 )) * 1.2;
				echo number_format($sum,2). " лева";
				break;
			case($var <= 250):
				$sum = ((50 * $price50 ) + (100 * $price150) + (($var - 150) *$price250 )) * 1.2;
				echo number_format($sum,2). " лева";
				break;
			case ($var <= 150):
				$sum = ((50 * $price50 ) + (($var - 50) * $price150)) * 1.2;
				echo number_format($sum,2). " лева";
				break;
			case ($var <= 50):
				$sum = ($var * $price50 )* 1.2;
				echo number_format($sum,2). " лева";
				break;
		}
	?>