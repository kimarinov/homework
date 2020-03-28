<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Добави нова държава</title>
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Добави нова държава</h1>
		</div>
		<div id="content">
			<ul>
				<li>
					<span id="underline"><a href="../index.php">Върни се обратно към началната страница</a></span>
				</li>
				<li>
					Добави нова държава от списъка по-долу
					<form method="POST">
						<div class="margin_top_10">
							<select name="countries">
								<option value="default">Добави нова държава...</option>
								<?php
									$countries = return_all_countries();
									foreach ($countries as $value) {
										echo '<option value="' . $value . '">' . $value .  '</option>'; 
									}
								?>
							</select>
						</div>
						<div class="margin_top_10">
							<input type="submit" name="submit" value="Добави нова държава">
						</div>					
					</form>
					
					<?php
						// Може би по-правилно е да се сетне стойността UNIQUE на name в базата данни, но сега ще го направя в php
						if (isset($_POST['submit'])){
							if (isset($_POST['countries']) && $_POST['countries'] != "default"){
								$added_countries = get_all_from_database_without_null($conn, 'countries', 'name');
								if (in_array($_POST['countries'], $added_countries)) {
								    echo $_POST['countries'] . ' е вече добавена в списъка! Опитайте с нова държава или се върнете обратно.';
								} else {
									$result = add_new_country_to_database($conn, $_POST['countries']);
									if ($result == true){
										echo 'Добавихте успешно ' . $_POST['countries'];
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