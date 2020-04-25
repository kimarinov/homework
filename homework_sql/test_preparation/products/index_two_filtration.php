<?php 
include '../includes/db_connect.php';
include '../includes/header_inner.php';
 
$read_query = "SELECT * FROM `products`";
$read_result = mysqli_query($conn, $read_query);
if ( isset($_POST['search']) ) {
	if( !empty( $_POST['search_string'])){
																							//LIKE "%%";
		$read_query = "SELECT * FROM `products` WHERE `date_deleted` IS NULL AND ";
		$read_query .= "product_name LIKE '%" . $_POST['search_string'] . "%'OR product_id ='" . $_POST['search_string'] . "'" ;

		 var_dump($read_query);

		$read_result = mysqli_query($conn, $read_query);
		$search = $_POST['search_string'];
		//var_dump($search);
	}
}

if( mysqli_num_rows($read_result) > 0 ){
?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="post">
						<div class="col-md-8">
						<input type="text" name="search_string" class="form-control" value="<?php if(isset( $search )) { echo $search;} ?>" placeholder="Enter priduct name or product id...">
						</div>
						<div class="col-md-2">	
							<input type="submit" class="btn btn-success" name="search" value="SEARCH">
						</div>
						<div class="col-md-2">	
							<a href="index_two_filtration.php" class="btn btn-warning">Clear SEARCH</a>
						</div>	
					</form>	
			</div>
		</div>
	</div>


	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Products</td>
			<td>Product_id</td>
		</tr>
	<?php
	$num = 1;
		while($row = mysqli_fetch_assoc($read_result)){

			?>
			<tr>
				<td><?= $num ++?></td>
				<td><?= $row['product_name'] ?></td>	
				<td><?= $row['product_id'] ?></td>
			</tr>
			<?php
		}
	?>
	</table>
<?php 
}	else{ 
		?>	
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="post">
						<div class="col-md-8">
						<input type="text" name="search_string" class="form-control" value="<?php if(isset( $search )) { echo $search;} ?>" placeholder="Enter priduct name or product id...">
						</div>
						<div class="col-md-2">	
							<input type="submit" class="btn btn-success" name="search" value="SEARCH">
						</div>
						<div class="col-md-2">	
							<a href="index.php" class="btn btn-warning">Clear SEARCH</a>
						</div>	
					</form>	
			</div>
		</div>
	</div>


	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Products</td>
			<td>Product_id</td>
		</tr>
	<?php
	$num = 1;
		while($row = mysqli_fetch_assoc($read_result)){

			?>
			<tr>
				<td><?= $num ++?></td>
				<td><?= $row['product_name'] ?></td>	
				<td><?= $row['product_id'] ?></td>
			</tr>
			<?php
		}
	?>
	</table>
	<?php
	}

