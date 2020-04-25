<h2>Recycle Bin</h2>
<a href="index.php" title="">Home </a>

<?php 
include '../includes/header_inner.php';


//1
$read_query = "SELECT * FROM `meal_types` WHERE date_deleted IS NOT NULL";

$result = mysqli_query($conn, $read_query);

if(mysqli_num_rows($result )){
	
?>

	<table style="margin-left: 50px" class="table table-striped">		
		<tr>
			<td>#</td>
			<td>Meal_types</td>
			<td>Permanent Delete</td>
			<td>Restore</td>
		</tr>
		<?php 
		$count = 1;
		while( $row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td><?=$count++ ?></td>
				<td><?= $row['meal_type_name']?></td>
				<td><a href="delete.php?id=<?= $row['meal_type_id']?>">Permanent Delete</a></td>
				<td><a href="restore.php?id=<?= $row['meal_type_id']?>">Restore</a></td>
			</tr>
			<?php
		}

		?>
	</table>

<?php 

}


?>