<?php
	include '../functions/db_connect.php';
	include '../functions/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Възстанови запис за дестинация от кошчето</title>
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Списък на всички дестинации, поставени в кошчето</h1>
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
							$countries = get_id_and_name_from_destinations_in_bin($conn);
							foreach ($countries as $key => $value) {
								echo '<li>' .  $value . ' :: <a href="restore-from-recycle-bin-id.php?id=' . $key . '">Възстанови от Кошчето</a>';
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