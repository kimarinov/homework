<?php  

$master = ['healt' =>20, 'Attack' =>10 , 'Resistance' =>5, ];
$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
$brute = ['healt' =>6, 'Attack' =>8 , 'Resistance' =>2, ];
$guardian = ['healt' =>8, 'Attack' =>6 , 'Resistance' =>5, ];


$resoult = ['atack_master' => 0, 'atack_oponents'=>0, 'avg_dmg_master' => 0,'avg_dmg_oponents'=> 0, ];

$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - ($apprentice['healt'] + $apprentice['Resistance']));
	while ($master['healt'] >= 0 && $apprentice['healt'] >= 0 ) {
		
		
		$master['healt'] = ($master['healt'] + $master['Resistance']) - $apprentice['Attack'];
		$resoult['atack_master'] ++;
		
		$apprentice['healt'] = ($apprentice['healt'] + $apprentice['Resistance']) - $master['Attack'];
		$resoult['atack_oponents']++;
		$resoult['avg_dmg_oponents'] = $apprentice['Attack'] - ($master['healt'] + $master['Resistance']);
		//echo $master['healt']. " " ;
		//echo $apprentice['healt']. "<br>";
		if ( $apprentice['healt'] == 0 || $master['healt'] == 0) {
			break;
		}
	}
$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - ($brute['healt'] + $apprentice['Resistance']));

	echo $resoult['avg_dmg_master'];
	//echo $resoult['atack_master'];

	while ($master['healt'] >= 0 && $brute['healt'] >= 0 ) {
		
		$master['healt'] = ($master['healt'] + $master['Resistance']) - $brute['Attack'];
		$resoult['atack_master'] ++;
		$brute['healt'] = ($brute['healt'] + $brute['Resistance']) - $master['Attack'];
		$resoult['atack_oponents']++;
		//echo $master['healt']. " " ;
		//echo $brute['healt']. "<br>";
		if ( $brute['healt'] == 0 || $master['healt'] == 0) {
			break;
		}
		echo "<br>";
	}
$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - ($guardian['healt'] + $guardian['Resistance']));
echo $resoult['avg_dmg_master'];
	while ($master['healt'] >= 0 && $guardian['healt'] >= 0 ) {
	
		$master['healt'] = ($master['healt'] + $master['Resistance']) - $guardian['Attack'];
		$resoult['atack_master'] ++;
		$resoult['avg_dmg_master'] =$resoult['avg_dmg_master'] + ($master['Attack'] - ($apprentice['healt'] + $apprentice['Resistance']));
		$guardian['healt'] = ($guardian['healt'] + $guardian['Resistance']) - $master['Attack'];
		$resoult['atack_oponents']++;
		//echo $master['healt']. " " ;
		//echo $guardian['healt']. "<br>";
		if ( $guardian['healt'] == 0 || $master['healt'] == 0) {
			break;
		}
		echo "<br>";
	}

// echo $resoult['atack_master']. " ".$resoult['atack_oponents'];

//echo $resoult['avg_dmg_master'];