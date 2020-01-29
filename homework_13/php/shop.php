<?php 
session_start();
	if (!isset($_SESSION['user'])) {
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['money'] = $_POST['money'];
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h3>Hello <?php echo $_SESSION['user'] ?> You have <?php echo $_SESSION['money'] ?> money! </h3>
	 <form action="cart.php" method="POST">
	 	<ul>
	 		<li><img src="../img/E39.jpg" alt=""> BMW E39-Price 10
	 			<input type="checkbox" value="1" name="Product[BMW E39][buy]">
	 			<input type="hidden" value="10" name="Product[BMW E39][price]">
	 			quantity<input type="number" name="Product[BMW E39][quantity]">
	 		</li>
	 		<li>
	 			<img src="../img/tauring E39.jpg" alt=""> BMW E39tauring-Price 10
	 			<input type="checkbox" value="1" name="Product[BMW E39tauring][buy]">
	 			<input type="hidden" value="10" name="Product[BMW E39tauring][price]">
	 			quantity<input type="number" name="Product[BMW E39tauring][quantity]">

	 		</li>
	 		<li>
	 			<img src="../img/e60.jpg" alt=""> BMW E60-Price 20
	 			<input type="checkbox" value="1" name="Product[BMW E60][buy]">
	 			<input type="hidden" value="20" name="Product[BMW E60][price]">
	 			quantity<input type="number" name="Product[BMW E60][quantity]">


	 		</li>
	 		<li>
	 			<img src="../img/e61.jpg" alt=""> BMW E61-Price 30
	 			<input type="checkbox" value="1" name="Product[BMW E61][buy]">
	 			<input type="hidden" value="30" name="Product[BMW E61][price]">
	 			quantity<input type="number" name="Product[BMW E61][quantity]">


	 		</li>
	 		<li>
	 			<img src="../img/f10.jpg" alt=""> BMW F10-Price 40
	 			<input type="checkbox" value="1" name="Product[BMW F10][buy]">
	 			<input type="hidden" value="40" name="Product[BMW F10][price]">
	 			quantity<input type="number" name="Product[BMW F10][quantity]">


	 		</li>
	 		<input type="submit" name="buy">
	 	</ul>
	 </form>

 </body>
 </html>
