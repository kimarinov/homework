<?php  

include 'includes/body.php';

$read_query ="SELECT `test_2_id`, `test_2_name`, `test_2_deleted` FROM `tests_2` WHERE `test_2_deleted` is null";
$result = mysqli_query($connection, $read_query);

?>
<a href="recycle_bin.php">Recycle bin</a>
<table border="1">
	<td>#</td>
	<td>name</td>
	<td>Updatate</td>
	<td>Soft delete</td>
	<td>Delete</td>
	<?php  
$num = 1;
if (mysqli_num_rows($result) > 0 ) {
	while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?= $num++ ?></td>
			<td><?= $row['test_2_name'] ?></td>
			<td><a href="update.php?id=<?= $row ['test_2_id']?> ">Update</a></td>
			<td><a href="soft_delete.php?id=<?= $row ['test_2_id']?> ">Soft delete</a></td>
			<td><a href="delete.php?id=<?= $row ['test_2_id']?>">Delete</a></td>
		</tr>
		<?php  
	}

}
 ?>
</table>