<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homework7_Kaloyan</title>
</head>
<body>

<?php

$a =2;
$b =19;
$c = 1;

if ($a <= $b ) { 
	if ($a <= $c) {
		if ($b <= $c) {
	 	echo "\n $a $b $c";
	 	} 
	}
}


if ($a < $c ) { 
	if ($a < $b) {
		if ($c < $b) {
	 	echo nl2br ("\n $a $c $b");
	 	} 
	}
}

if ($b < $c ) { 
	if ($b < $a) {
		if ($c < $a) {
	 	echo nl2br ("\n $b $c $a");
	 	} 
	}
}
if ($b <= $a ) { 
	if ($b <= $c) {
		if ($a <= $c) {
	 	echo nl2br ("\n $b $a $c");
	 	} 
	}
}
if (($c < $a) && ($c < $b) && ($a < $b)) {
	echo nl2br ("\n $c $a $b");
}

	switch (($c <= $b) && ($c <= $a) && ($b <= $a)) {
		case 'true':
			echo nl2br ("\n $c $b $a");
			break;
	}

?>
</body>
</html>
