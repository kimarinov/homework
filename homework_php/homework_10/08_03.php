<?php
$span=9;
echo "<table border=1>";
for ($i=1; $i<=10; $i++)
{
	echo "<tr>";
	for ($j=1; $j<=$i; $j++)
		{echo "<td>";
			echo $i." * ".$j." = ".($i*$j);
		 echo "</td>";}
	if ($span>=1) {echo "<td colspan='$span'>"."</td>";}
	$span--;
	echo "</tr>";
}
echo "</table>";