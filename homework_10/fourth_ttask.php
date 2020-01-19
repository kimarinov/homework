<!DOCTYPE html>
<html>
<head>
	<title>homewok</title>
</head>
<body>
	<form action="" method="post">
		Your number with , and space <input type="text" name="num[]" >
		<input type="submit" name="submit">
	</form>
	<?php 
	if (!empty($_POST)) {
		$arr = $_POST['num'];
		var_dump($arr);
		echo "<table border = 1>";

		foreach ($arr as $key => $value) {
	
		
		echo "<tr>".$value."</tr>";
		
	
		}
		
		echo "</table>";
	}
	
	 ?>

</body>
</html>