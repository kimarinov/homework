<?php  

$arr = [
	['name'=> "name1", 'JF' => '50', 'D' => '5', 'C' => '4', 'P' => '2'],
	['name'=> "name2", 'JF' => '5', 'D' => '2', 'C' => '3', 'P' => '3'],
	['name'=> "name3", 'JF' => '11', 'D' => '1', 'C' => '2', 'P' => '5'],
	['name'=> "name4", 'JF' => '20', 'D' => '3', 'C' => '1', 'P' => '6'],
	['name'=> "name5", 'JF' => '5', 'D' => '4', 'C' => '7', 'P' => '9'],

];
$sum_r = 0;
for ($i=0; $i < count($arr) ; $i++) { 
	$arr[$i]['R'] = ((($arr[$i]['JF']+$arr[$i]['D'])*($arr[$i]['JF']+$arr[$i]['D']))+($arr[$i]['C']*$arr[$i]['C']))/$arr[$i]['D'];

$sum_r += $arr[$i]['R'];

}

$avg_r = $sum_r/ count($arr);

var_dump($arr);

$min = $arr[0]['R'];
$min_ind = 0;
for ($i=0; $i <count($arr) ; $i++) { 
	if ($arr[$i]['R'] < $min) {
		$min =$arr[$i]['R'];
		$min_ind = $i;
	}
}

?>
<table>
	<tr>
		<td>name</td>
		<td>JF</td>
		<td>D</td>
		<td>C</td>
		<td>Sport</td>
		<td>R</td>
	</tr>
	


<?php for ($p=0; $p < count($arr); $p++) { 
	?>
	<td><?php  ?></td>
	foreach ($arr as $key => $value) {
		
	}
	
}
 ?>
 <td><?php $value; ?></td>
 </tr>
 </table>