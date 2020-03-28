<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Изтрий запис за държава</title>
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Списък на всички държави</h1>
		</div>
		<div id="content">
			<ul>
				<li>
					<span id="underline"><a href="../index.php">Върни се обратно към началната страница</a></span>
				</li>
				<li>
					Всички държави
					<ul>
						<?php
							$countries = get_id_and_name_from_countries($conn);
							foreach ($countries as $key => $value) {
								echo '<li>' .  $value . ' :: <a href="delete-country-id.php?id=' . $key . '">Изтрий</a>';
							}
						?>
					</ul>
				</li>
			</ul>

		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>