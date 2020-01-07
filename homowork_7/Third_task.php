<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homework7_Kaloyan EGN TASK</title>

</head>
<body>
<?php
	$egn = 830722109; //8307221098
	$Lastnumber;
	$sum;
	$sum = (8 * 2) + (4 * 3) + (8 * 0) + (5 *7) + (10 * 2) + (9 * 2) + (7 * 1) + (3 * 0) + (6 * 9);
	$Lastnumber = $sum - (((int) ($sum / 11)) * 11);

	echo "EGN is 8307221098 and the last number is: $Lastnumber";
	
?>
</body>
</html>
