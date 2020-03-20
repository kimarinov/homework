<?php 
include 'includes/header.php';

$read_query = " SELECT name, country_id FROM `countries` WHERE countries.date_deleted is  NOT NULL";
$result = mysqli_query($conn, $read_query);
?>

<table style="margin-left: 50px" class="table table-striped">
	<tr>
		<td>#</td>
		<td>country</td>
		<td>Restore</td>

	</tr>
<?php 
$num = 1;
	while($row = mysqli_fetch_assoc($result)){
		
		?>
		<tr>
			<td><?= $num ++?></td>	
			<td><?= $row['name'] ?></td>	
			<td><a href="restore.php?id=<?= $row['country_id'] ?>" class="btn btn-warning">Restore</a></td>
		</tr>
		<?php
	}
	?>
</table>

<a href="index.php" title=""><h3>Home</h3></a>