<?php 
session_start();


$BMW = $_POST['Product'];


foreach ($BMW as $name => $model) {
	if (!isset($BMWp[$name]["buy"])) {
		
		if ($BMW["$name"]["buy"] == 1 ) {
			$BMW["$name"]["total"] = $BMW["$name"]["price"] * $BMW["$name"]["quantity"];	
		}
	}
}

$totalSum = 0;


echo "You purches <br>";
foreach ($BMW as $name => $model) {
		if ($BMW["$name"]['buy'] == 1) {
		$totalSum += $BMW["$name"]["total"];
		echo "$name ". $BMW["$name"]["quantity"] . " quantities.The price is ". $BMW["$name"]["total"]."<br>" ;
		}
	}
echo "Total price is $totalSum <br>";
if ($_SESSION['money'] > $totalSum ) {
	echo "Your balance is ". ($_SESSION['money'] - $totalSum );
}
if ($_SESSION['money'] < $totalSum) {
	echo "Not enought money ";
}

?>
<html>
	<br>
	<a href="shop.php"> Back <br>
	<a href="logout.php"> Log Out
</html>
