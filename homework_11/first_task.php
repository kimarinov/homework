<?php  
$students = ['Pesho' => ['math' => 5, 'english' => 5, 'bel'=>5, 'chemistry'=> 5, 'physic' =>6, ],
		  	'Gosho' => ['math'=>5, 'english'=> 5, 'bel'=>6, 'chemistry'=> 5, 'physic' =>6, ],
		  	'Nayden' => ['math'=>3, 'english'=> 2, 'bel'=>5, 'chemistry'=> 2, 'physic' => 5, ],
		  	'Kaloyan' => ['math'=>5, 'english'=> 2, 'bel'=>5, 'chemistry'=> 2, 'physic' => 6, ],
		  	'Bobi' => ['math'=>5, 'english' => 4, 'bel'=>5,  'chemistry'=> 4,  'physic' => 6, ],
];

$AvareScore = 0;

echo "<table border = 1>";
foreach ($students as $key => $value) {
	echo "<tr><td> $key </td>";

	foreach ($value as $key1 => $value1) {
		echo "<td> $key1 $value1 </td>";
		$AvareScore = $value1 + $AvareScore; 
	}
	echo "</tr>";
}
echo "</table>";
$AvareScore /= 25; 

$AvareScorePesho=1;
foreach ($students['Pesho'] as $key => $value) {
	$AvareScorePesho = $value + $AvareScorePesho;
}
$AvareScorePesho /=5;

$AvareScoreGosho=1;
foreach ($students['Gosho'] as $key => $value) {
	$AvareScoreGosho = $value + $AvareScoreGosho;
}
$AvareScoreGosho /=5;

$AvareScoreNayden=1;
foreach ($students['Nayden'] as $key => $value) {
	$AvareScoreNayden = $value + $AvareScoreNayden;
}
$AvareScoreNayden /=5;

$AvareScoreKaloyan=1;
foreach ($students['Kaloyan'] as $key => $value) {
	$AvareScoreKaloyan = $value + $AvareScoreKaloyan;
}
$AvareScoreKaloyan /=5;

$AvareScoreBobi=1;
foreach ($students['Bobi'] as $key => $value) {
	$AvareScoreBobi = $value + $AvareScoreBobi;
}
$AvareScoreBobi /=5;
print_r($students); echo "<br>";
array_push($students['Pesho'],"AvarageScore $AvareScorePesho" );
array_push($students['Gosho'], "AvarageScore $AvareScoreGosho");
array_push($students['Nayden'], "AvarageScore $AvareScoreNayden");
array_push($students['Kaloyan'], "AvarageScore $AvareScoreKaloyan");
array_push($students['Bobi'], "AvarageScore  $AvareScoreBobi");
print_r($students);

echo "<table border = 1>";
foreach ($students as $key => $value) {
	echo "<tr><td> $key </td>";

	foreach ($value as $key1 => $value1) {
		echo "<td> $key1 $value1 </td>";
	}
	echo "</tr>";
}
echo "</table>";

foreach ($students['Pesho'] as $key => $value) {
	echo "$value";
}