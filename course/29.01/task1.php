<?php  

$str = "eweweqweq";

$str_uper = strtoupper($str);
echo $str_uper; 
$str_smoll = strtolower($str_uper);
echo " $str_smoll";

$str_first_letter = strtoupper(str_split($str_smoll));


strtoupper($str_smoll[0]);
echo strtoupper($str_smoll[0]);
echo "<br>";
var_dump($str_smoll);
//print_r($str_first_letter);