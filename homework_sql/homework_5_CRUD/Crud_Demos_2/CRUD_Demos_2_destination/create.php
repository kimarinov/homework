<?php 

include 'includes/header.php';
$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($conn, $countries_query);
mysqli_num_rows($countries_result);
?>

<form method="post">
	<p>Enter destination</p>
	<input type="text" name="destination_name">
	<select name="country" >
		<?php 
		 while($country_row = mysqli_fetch_assoc($countries_result)){		
	?>
		<option value="<?= $country_row['country_id']?>" ><?= $country_row['name']?></option>

	<?php } ?>		
	</select>
	<input type="submit" name="save">

</form>

<?php 

if (!empty($_POST)) {

	$destination_name = $_POST['destination_name'];
	$country_id = intval($_POST['country']);

	$insurt_query = "INSERT INTO `destinations`( `destination_name`, `country_id`) VALUES ('$destination_name',$country_id)";
	$resoul_query = mysqli_query($conn, $insurt_query);
	if ($resoul_query) {
		echo "Insurt complete";
		header("location: index.php");
	}else{
		echo "string";
	}
}