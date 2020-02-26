<?php 
$arr=array();
for ($i=0; $i < 20; $i++) { 
	array_push($arr, $i);
foreach ($arr as $key => $value) {
	$arr[$value] = $arr[$key] * 5;
}
print_r($arr);
