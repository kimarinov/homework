<?php 
include '../includes/header_inner.php';

//1
$read_query = "SELECT * FROM `meal_types` WHERE date_deleted IS NOT NULL";

$result = mysqli_query($conn, $read_query);

if(mysqli_num_rows($result )){
	
?>
<h2>Recycle Bin</h2>
	<table border="1">		
		<tr>
			<td>#</td>
			<td>Unit</td>
			<td>Permanent Delete</td>
			<td>Restore</td>
		</tr>
		<?php 
		while( $row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td></td>
				<td><?= $row['meal_types']?></td>
				<td><a href="delete.php?id=<?= $row['unit_id']?>">Permanent Delete</a></td>
				<td><a href="">Restore</a></td>
			</tr>
			<?php
		}

		?>
	</table>

<?php 

}


?>