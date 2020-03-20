<?php 

 include 'includes/header.php';

 ?>

 <form method="post">
 	<p>Enter country</p>
 	<input type="text" name="new_country">
 	<input type="submit" name="">

 </form>

 <?php 
if (!empty($_POST)) {

	
	$new_country = $_POST['new_country'];

	$insurt_query = " INSERT INTO `countries`(`name`) VALUES ('$new_country')";	
	$resoul_query = mysqli_query($conn, $insurt_query);
}
  ?>

  <a href="index.php"> <h2>Home</h2></a>