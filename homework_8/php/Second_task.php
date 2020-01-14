<!DOCTYPE html>
<html>
<head>
	<title>Homowerk_8 Kaloyan</title>
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<p>Your full name <input type="text" name="name"></p>
		<p>EGN <input type="number" name="egn"></p>
		<p>Adres <input type="text" name="adres"></p>
		<p>Education <input type="text" name="eduvation"></p>
		<p>What do you do for a living <input type="text" name="profesion"></p>
		<p><input type="submit" name="submit"></p>
	</form>
	<?php
		if (!empty($_POST)) {
		
			$name = $_POST['name'];
			$egn = $_POST['egn'];
			$adres = $_POST['adres'];
			$eduvation = $_POST['eduvation'];
			$profesion = $_POST['profesion'];
			echo "<table border='1'>";
			echo "<tr><td>Name</td><td>$name</td></tr>";
			echo "<tr><td>EGN</td><td>$egn</td></tr>";
			echo "<tr><td>Adres</td><td>$adres</td></tr>";
			echo "<tr><td>Education</td><td>$eduvation</td></tr>";
			echo "<tr><td>Profesion</td><td>$profesion</td></tr>";
			echo "</table>";
		}
		 ?>
		



</body>
</html>