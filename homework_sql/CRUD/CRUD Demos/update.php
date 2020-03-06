<?php 
include 'includes/header.php'
?>
<form method="post">
	<p>Update unit</p>
	<input type="text" name="test_name">
	<input type="submit" name="submit" value="save">

</form>
<?php 
$unit_id = $_GET['id'];


$read_query = "SELECT * FROM test WHERE test_id=`$unit_id`";
				

$result = mysqli_query($conn, $read_query);
if ($result) {
	$row
}
?>
<!-- <table border= "1" style="margin-left: 50px">
	<td>#</td>
	<td>Unit</td>
	<td>***</td>
<?php  
$num = 1;
if (mysqli_num_rows($result) > 0 ) {
	while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?= $num++ ?></td>
			<td><?= $row['test_name'] ?></td>
			<td><a href="">Update</a></td>
		</tr>
		<?php  
	}

}
 ?>
</table> --> -->
 