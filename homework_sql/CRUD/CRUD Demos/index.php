<?php 
include 'includes/header.php';

$read_query = "SELECT * FROM `test` WHERE `date_deleted` is null";
				

$result = mysqli_query($conn, $read_query);
?>
<table border= "1">
	<td>#</td>
	<td>Unit</td>
<?php  
$num = 1;
if (mysqli_num_rows($result) > 0 ) {
	while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?= $num++ ?></td>
			<td><?= $row['test_name'] ?></td>
		</tr>
		<?php  
	}

}
 ?>
</table>