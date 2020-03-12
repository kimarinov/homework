<?php 
include 'includes/header.php';

$read_query = "SELECT * FROM `test` WHERE `date_deleted` is null";
				

$result = mysqli_query($conn, $read_query);
?>
<a href="recyvle_bin.php">RecycleBin</a>
<table border= "1" style="margin-left: 50px">
	<td>#</td>
	<td>Unit</td>
	<td>***</td>
	<td>Soft delete</td>
<?php  
$num = 1;
if (mysqli_num_rows($result) > 0 ) {
	while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?= $num++ ?></td>
			<td><?= $row['test_name'] ?></td>
			<td><a href="update.php?id=<?= $row ['test_id']?> ">Update</a></td>
			<td><a href="soft_delete.php?id=<?= $row ['test_id']?> ">Soft delete</a></td>
		</tr>
		<?php  
	}

}
 ?>
</table>