<!DOCTYPE html>
<html>
<head>
	<title>CRUD за Travel База данни</title>
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>CRUD за Travel База данни</h1>
		</div>
		<div id="content">
			<ul>
				<li>
					Държави
					<ul>
						<li>
							<a href="countries/see-all-countries.php">Виж всички записи за държави</a>
						</li>
						<li>
							<a href="countries/add-new-country.php">Добави запис за нова държава</a>
						</li>
						<li>
							Редактирай записа за дадена държава
						</li>
						<li>
							<a href="countries/soft-delete.php">Изпрати в кошчето записа за дадена държава</a>
						</li>
						<li>
							<a href="countries/restore-from-recycle-bin.php">Възстанови от кошчето записа за дадена държава</a>
						</li>
						<li>
							<a href="countries/delete-country.php">Изтрий завинаги записа за дадена държава</a>
						</li>
					</ul>
				</li>
				<li>
					Дестинации
					<ul>
						<li>
							<a href="destinations/display-all-destinations.php">Виж всички записи за дестинации</a>
						</li>
						<li>
							<a href="destinations/add-new-destination.php">Добави запис за нова дестинация</a>
						</li>
						<li>
							Редактирай записа за дадена дестинация
						</li>
						<li>
							<a href="destinations/soft-delete.php">Изпрати в кошчето записа за дадена дестинация</a>
						</li>
						<li>
							<a href="destinations/restore-from-recycle-bin.php">Възстанови от кошчето записа за дадена дестинация</a>
						</li>
						<li>
							<a href="destinations/delete-destination.php">Изтрий завинаги записа за дадена дестинация</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="footer">
		</div>
	</div>

</body>
</html>