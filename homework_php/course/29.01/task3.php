<?php  

$b = "irejti4jrt erwr eER EWE gsS4343";

//$split

//echo ord("Awerwerw34");
$b_split = str_split($b);
for ($i=0; $i < strlen($b) ; $i++) { 

	
		if (ord($b_split[$i]) >= 65 && ord($b_split[$i]) < 91) {
			echo "$b[$i] ";
		}
		if (ord($b_split[$i]) >= 97 && ord($b_split[$i]) < 122) {
			echo "$b[$i] ";
		}

		if (ord($b_split[$i]) >= 48 && ord($b_split[$i]) < 57) {
			echo "$b[$i] ";
		}

}