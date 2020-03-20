<?php 
include 'includes/header.php';

$read_query = " SELECT destinations.destination_id, destinations.destination_name, countries.name as country_name FROM countries Left JOIN destinations ON destinations.`country_id`= countries.country_id WHERE destinations.date_deleted is  NOT NULL";
$result = mysqli_query($conn, $read_query);
?>

<table style="margin-left: 50px" class="table table-striped">
	<tr>
		<td>#</td>
		<td>destination</td>
		<td>country</td>
		<td>Restore</td>

	</tr>
<?php 
$num = 1;
	while($row = mysqli_fetch_assoc($result)){
		
		?>
		<tr>
			<td><?= $num ++?></td>
			<td><?= $row['destination_name'] ?></td>	
			<td><?= $row['country_name'] ?></td>	
			<td><a href="soft_restore.php?id=<?= $row['destination_id'] ?>" class="btn btn-warning">Restore</a></td>
		</tr>
		<?php
	}
	?>
</table>

<a href="index.php" title=""><h3>Home</h3></a>