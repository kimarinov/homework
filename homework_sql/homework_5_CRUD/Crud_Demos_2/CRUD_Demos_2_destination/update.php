<?php 
include 'includes/header.php';

$destinations_id = $_GET['id'];

$read_query = "SELECT * FROM destinations WHERE destination_id=". $destinations_id;

$result = mysqli_query($conn, $read_query);
if( $result ){
	$row = mysqli_fetch_assoc($result);
}
$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($conn, $countries_query);
?>

<form method="post" action="">
	<p>Update destination</p>
	<input type="text" name="destination_name" value="<?= $row['destination_name'] ?>">
	<input type="hidden" name="destination_id" value="<?= $row['destination_id']?>">
	<select name="country">
	<?php 
		if( mysqli_num_rows($countries_result) > 0 ){
		while($country_row = mysqli_fetch_assoc($countries_result)){		
	?>
		<option value="<?= $country_row['country_id']?>" ><?= $country_row['name']?></option>

	<?php } 
		} ?>		
	</select>
	<input type="submit" name="submit" value="save">	
</form>

<?php 
if( !empty($_POST) ){

	$destination_name = $_POST['destination_name'];
	$destination_id = $_POST['destination_id'];
	$country_id = intval($_POST['country']);
	$update_query = "UPDATE `destinations` SET `destination_name`='". $destination_name ."', country_id=$country_id WHERE `destination_id`=".$destination_id ;
	$update_res = mysqli_query($conn, $update_query);
	if( !$update_res ){
			die('Update failed!' . mysqli_error($conn));
		}else {
			header("Location: index.php");
			echo "Update successful!";
		}
}
 