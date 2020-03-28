<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Изпрати към кошчето запис за дестинация</title>
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Списък на всички дестинации</h1>
		</div>
		<div id="content">
			<ul>
				<li>
					<span id="underline"><a href="../index.php">Върни се обратно към началната страница</a></span>
				</li>
				<li>
					Всички дестинации
					<ul>
						<?php
							$countries = get_id_and_name_from_destinations($conn);
							foreach ($countries as $key => $value) {
								echo '<li>' .  $value . ' :: <a href="soft-delete-id.php?id=' . $key . '">Изпрати в кошчето</a>';
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