<?php 

 include 'includes/header.php';

$country_id = $_GET['id'];

$read_query = "SELECT * FROM countries WHERE country_id =". $country_id;

$result = mysqli_query($conn, $read_query);

if( $result ){
	$row = mysqli_fetch_assoc($result);
}

?>

<form action="" method="post" accept-charset="utf-8">
	<input type="text" name="update_country" value="<?=$row['name'] ?>">
	<input type="submit" name="">
</form>

<?php 

 if (!empty($_POST)) {

 	$update_country = $_POST['update_country'];
 	$update_query = "UPDATE `countries` SET `name`='$update_country' WHERE country_id =$country_id";
 	$update_result = mysqli_query($conn, $update_query);
 	if ($update_result) {
 		header("location: index.php");
 	}else{ die. mysqli_error($update_result);

 	}

 }