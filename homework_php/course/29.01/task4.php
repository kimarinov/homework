<?php  

$str = "Take a shot";

for ($i=0; $i < strlen($str); $i++) { 
	if ($i < strlen($str) / 2) {
		if (ord($str[$i]) == 97 ) {
			//$str[$i] = chr(117);
			echo $str[$i];
		}
	}

}
//print_r($str);

echo chr(117);