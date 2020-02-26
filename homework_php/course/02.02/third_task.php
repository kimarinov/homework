<?php 

$arr = [ ['name' => 'Petar', 'hight'=> '160', 'weight'=>'90' ],
	 	['name' => 'John', 'hight'=> '180', 'weight'=>'80' ],
];



for ($i=0; $i <count($arr) ; $i++) { 
	$arr[$i]['Itm'] = $arr[$i]['weight']/ pow($arr[$i]['hight'], 2);
	//$arr['Average_hight'] += $arr[$i]['hight'];
}
$arr[2]['Average_hight'] = 0;
for ($i=0; $i < 2 ; $i++) { 
	$arr[2]['Average_hight'] += ($arr[$i]['hight'] / 2);
}







echo "<pre>";
echo var_dump($arr);
echo "</pre>";