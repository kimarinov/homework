<?php 

 include 'includes/header.php';

 $read_query = "SELECT
    countries.name AS country_name, destinations.destination_name,countries.country_id 
FROM `countries` LEFT JOIN destinations ON destinations.country_id = countries.country_id 
WHERE countries.date_deleted IS NULL";
 $read_result = mysqli_query($conn, $read_query);
 ?>

<table style="margin-left: 50px" class="table table-striped">
	<tr>
		<td>#</td>
		<td>country</td>
		<td>destination</td>
		<td>Update</td>
		<td>soft delete</td>
		<td>DELETE!</td>
	</tr>
<?php 
$num = 1;
	while($row = mysqli_fetch_assoc($read_result)){
		
		?>
		<tr>
			<td><?= $num ++?></td>
			<td><?= $row['country_name'] ?></td>	
			<td><?= $row['destination_name'] ?></td>	
			<td><a href="update.php?id=<?= $row['country_id'] ?>" class="btn btn-warning">UPDATE</a></td>
			<td><a href="soft_delete.php?id=<?= $row['country_id'] ?>" class="btn btn-primary">Soft delete</a></td>
			<td><a href="delete.php?id=<?= $row['country_id'] ?>" class="btn btn-success">DELETE</a></td>	

		</tr>
		<?php
	}
	?>
</table>
<a href="create.php" title=""><h1>Add country</h1></a>
<a href="recycle_bin.php" title=""><h1>Recycle Bin</h1></a>