<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<?php 
		if (isset($_SESSION['error'])) {
			echo "<span style='color: #f00'>".$_SESSION['error']."</span>";
		}
		?>
		<form action="login_script.php" method="post" id="form">
			<label for="username">Enter your username:</label>
			<input type="text" name="username" id="username">
			<br>
			<label for="password">Enter your password:</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>