<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Добави нова дестинация</title>
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Добави нова дестинация</h1>
		</div>
		<div id="content">
			<ul>
				<li>
					<span id="underline"><a href="../index.php">Върни се обратно към началната страница</a></span>
				</li>
				<li>
					Добави нова дестинация
					<form method="POST">
						<div class="margin_top_10">
							<input type="text" name="destination">
							 в държава 
							<select name="country">
								<?php
									$added_countries = get_id_and_name_from_countries($conn);
									foreach ($added_countries as $key => $value) {
										echo '<option value="' . $key . '">' . $value .  '</option>'; 
									}
								?>
							</select>										
						</div>
						<div class="margin_top_10">
							<input type="submit" name="submit" value="Добави нова дестинация">
						</div>					
					</form>
					
					<?php
						// Може би по-правилно е да се сетне стойността UNIQUE на name в базата данни, но сега ще го направя в php
						if (isset($_POST['submit'])){
							if (isset($_POST['destination']) && trim($_POST['destination']) != ""){
								$added_destinations = get_all_from_database($conn, 'destinations', 'destination_name');
								if (in_array($_POST['destination'], $added_destinations)) {
								    echo $_POST['destination'] . ' е вече добавена в списъка! Опитайте с нова дестинация или се върнете обратно.';
								} else {
									$result = add_new_destination_to_database($conn, $_POST['destination'], $_POST['country']);
									if ($result == true){
										echo 'Добавихте успешно ' . $_POST['destination'];
									} else {
										echo 'Неуспешно добавяне. Опитайте отново';
									}
									
								}
							}
						}
					?>
				</li>
			</ul>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>