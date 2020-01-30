<?php  

function SHIFTINF($str){

	for ($i=0; $i < strlen($str); $i++) { 
		if ($i < strlen($str) / 2) {
			if (ord($str[$i]) == 97) {
				$str[$i] = "u";
				
			}
			if (ord($str[$i]) == 84) {
				$str[$i] = "V";
				
			}

		}
		if ($i > strlen($str) / 2) {
			if (ord($str[$i]) == 101 ) {
				$str[$i] = "o";
				
			}
			if (ord($str[$i]) == 115 ) {
				$str[$i] = "p";
				
			}
		}

	}
	return print_r($str);
}
$str = "Placeholders.";
SHIFTINF($str);
$str = "Take a shot.";
SHIFTINF($str);


