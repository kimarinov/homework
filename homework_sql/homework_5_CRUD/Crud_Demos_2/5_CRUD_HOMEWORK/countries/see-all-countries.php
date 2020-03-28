<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Списък на всички държави</title>
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
							display_array_in_li(get_all_from_database($conn, 'countries', 'name'));
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