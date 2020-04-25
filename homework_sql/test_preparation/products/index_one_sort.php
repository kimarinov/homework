<?php 
include '../includes/db_connect.php';
include '../includes/header_inner.php';
 
$read_query = "SELECT * FROM `products`";
$read_result = mysqli_query($conn, $read_query);
if( isset( $_POST['sort'])){
	//use this funcs, because it orders the data not as numbers but as digits - 1, 112, 20, ... 
	//ORDER BY ABS(column_name)
	//ORDER BY CAST(thecolumn AS int)
	$read_query = "SELECT * FROM `products` WHERE `date_deleted` IS NULL ORDER BY `product_name` " . $_POST['order'];
	// $read_query = "SELECT * FROM `recipes` WHERE `date_deleted` IS NULL ORDER BY ABS(" . $_POST['sort_by'] . ") " . $_POST['order'];
	var_dump($read_query);

	$read_result = mysqli_query($conn, $read_query);
}
if( mysqli_num_rows($read_result) > 0 ){
?>
	<div class="col-md-6">
		<form class="form-horizontal" method="post">
			<h3>Sort by name</h3>
			<div class="col-md-5">
				<select name="order" id="" class="form-control">
					<option value="ASC">low to high</option>
					<option value="DESC">high to low</option>
				</select>
			</div>
			<div class="col-md-2">	
				<input type="submit" class="btn btn-default" name="sort" value="SORT">
			</div>	
		</form>	
	</div>


	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Products</td>
			
		</tr>
	<?php
	$num = 1;
		while($row = mysqli_fetch_assoc($read_result)){

			?>
			<tr>
				<td><?= $num ++?></td>
				<td><?= $row['product_name'] ?></td>	
			
			</tr>
			<?php
		}
	?>
	</table>
<?php 
}
 ?>