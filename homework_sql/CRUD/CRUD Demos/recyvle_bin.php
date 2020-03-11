<?php 
include 'includes/header.php';

$read_query = "SELECT * FROM `test` WHERE `date_deleted` is not  null";
$result = mysqli_query($conn, $read_query);
if (!empty($_POST)) {
	$test_id = $_POST['test_id'];
}
?>
<a href="index.php">HOME</a>
<table border= "1" style="margin-left: 50px">
	<td>#</td>
	<td>Unit</td>
	<td>delete</td>
	<td>restore</td>
<?php  
$num = 1;
if (mysqli_num_rows($result) > 0 ) {
	while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?= $num++ ?></td>
			<td><?= $row['test_name'] ?></td>
			<td><?= $row['date_deleted'] ?> </td>
			<td><a href="restore.php?id=<?= $row ['test_id']?> ">Restore</a></td>

		</tr>
		<?php  
	}

}
 ?>
<tr><td colspan="100"><a href="restore_all.php">RESTORE ALL</a></td></tr>
</table>
