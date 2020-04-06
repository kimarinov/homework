<?php 
include '../includes/db_connect.php';
$title = 'create recipe';
include '../includes/header_inner.php';


//available units - !!!! THIS WAY - CASH THE RESULT FOR FUTURE USE
$all_units_query = "SELECT * FROM units";
$all_units_result = mysqli_query($conn, $all_units_query);
$unit = mysqli_fetch_all($all_units_result, MYSQLI_ASSOC);
?>
<div class="container">
	<form method="post" action="create_script.php">
		<p>Create Recipe</p>
		<div class="row">
			<div class="col-md-8">
				<label>Recipe name</label>
				<input class="form-control" type="text" name="recipe_name" placeholder="recipe name"><br>
			</div>			
			<div class="col-md-4">
				<label>Recipe preparation time</label>
				<input class="form-control" type="text" name="recipe_prep_time" placeholder="recipe prep time"><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Meal type</label>
				<p>In construction ...</p>
			</div>	
		</div>	
		<div class="row">
			<div class="col-md-12">
				<label>Recipe Description</label>
				<textarea class="form-control" name="recipe_descr"></textarea><br>
			</div>	
		</div>	
		<?php //echo mysqli_num_rows($result_products);  ?>

		<?php $product_inputs = 0; 
		while ($product_inputs < 10) {
			?>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label class="control-label">Product #<?= ($product_inputs+1) ?></label>
						<select class="form-control" name="products[<?= $product_inputs ?>][product]">
							<option value="">--select product--</option>
							<?php 
							//available products - !!! THIS WAY EVERY TIME WE SEND DB QUERY
							$all_products_query = "SELECT * FROM products";
							$all_products_result = mysqli_query($conn, $all_products_query);

							if( mysqli_num_rows($all_products_result) > 0 ){
								?>
								<?php while($all_product = mysqli_fetch_assoc($all_products_result)){
									?>
										<option value="<?= $all_product['product_id']?>"><?= $all_product['product_name']?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4">						
						<label class="control-label">quantity</label>
						<input class="form-control" type="text" name="products[<?= $product_inputs ?>][quantity]">
					</div>
					<div class="col-md-4">	
						<label class="control-label">Unit #<?= ($product_inputs+1) ?></label>
						<select class="form-control" name="products[<?= $product_inputs ?>][unit]">
							<option value="">--select unit--</option>
								<?php 
								for ($i = 0; $i < count($unit); $i++) {
									?>
									<option value="<?= $unit[$i]['unit_id']?>"><?= $unit[$i]['unit_name']?></option>
								<?php } ?>
						</select><br>							
					</div>
				</div>
				<?php			
				$product_inputs++;
			}
			?>
			<input type="submit" name="submit" value="save" class="btn btn-success">	
		</form>
	</div>
	<?php 
	//probable check for empty values
	
	include '../includes/footer.php'
	?>