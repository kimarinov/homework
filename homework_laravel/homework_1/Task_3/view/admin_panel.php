<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<style>
		.bold{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<p>Welcome <span class="bold"><?= $_SESSION['username'] ?></span> to the admin panel</p>
	<br><br><br>
	<p>
		<a href="logout.php">Logout</a>
	</p>
</body>
</html>