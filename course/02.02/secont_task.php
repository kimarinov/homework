<?php 

$str = 'boob';

$arr = str_split($str);

$count = 0;
for ($i=0; $i < count($arr)/2; $i++) { 
	if ($arr[$i] == ($arr[(count($arr) - 1) - $i])) {
		$count++;
	}
}
if ((count($arr)/2) == $count ) {
	echo "The word is Miror";
}