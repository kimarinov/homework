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

$AvareScorePesho = null;
foreach ($students['Pesho'] as $key => $value) {
	$AvareScorePesho = $value + $AvareScorePesho;
}
$AvareScorePesho /=5;
$students['Pesho']['average_score'] = $AvareScorePesho;

$AvareScoreGosho=null;
foreach ($students['Gosho'] as $key => $value) {
	$AvareScoreGosho = $value + $AvareScoreGosho;
}
$AvareScoreGosho /=5;
$students['Gosho']['average_score'] = $AvareScoreGosho;

$AvareScoreNayden=null;
foreach ($students['Nayden'] as $key => $value) {
	$AvareScoreNayden = $value + $AvareScoreNayden;
}
$AvareScoreNayden /=5;
$students['Nayden']['average_score'] = $AvareScoreNayden;

$AvareScoreKaloyan=null;
foreach ($students['Kaloyan'] as $key => $value) {
	$AvareScoreKaloyan = $value + $AvareScoreKaloyan;
}
$AvareScoreKaloyan /=5;
$students['Kaloyan']['average_score'] = $AvareScoreKaloyan;

$AvareScoreBobi=null;
foreach ($students['Bobi'] as $key => $value) {
	$AvareScoreBobi = $value + $AvareScoreBobi;
}
$AvareScoreBobi /=5;
$students['Bobi']['average_score'] = $AvareScoreBobi;

echo "<table border = 1>";
foreach ($students as $key => $value) {
	echo "<tr><td> $key </td>";

	foreach ($value as $key1 => $value1) {
		echo "<td> $key1 $value1 </td>";
	}
	echo "</tr>";
}
echo "</table>";


$sum = [];
foreach ($students as $name=>$student) { 
	foreach($student as $key => $value ){
		if( !isset($sum[$key])){
			$sum[$key] = 0;
		} 
				($sum[$key] += ($value / 5 ));
	}
}

echo "<table border = 1>";
foreach ($sum as $key => $value) {
	echo "<tr><td> Average score of ".$key  ."</td>";
	echo "<td> $value </td>";
	echo "</tr>";
}
echo "</table>";
?>