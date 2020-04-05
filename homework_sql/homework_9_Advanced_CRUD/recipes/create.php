<?php 
include '../includes/db_connect.php';
include '../includes/header_inner.php';
?>

<div class="container">
	<form method="post" action="create_script.php">
		<input type="hidden" name="recipe_id" value="<?= $recipe_id ?>">
		<p>Recipe name</p>
		<div class="row">
			<div class="col-md-8">
				<label>Recipe name</label>
				<input class="form-control" type="text" name="recipe_name"><br>
			</div>			
			<div class="col-md-4">
				<label>Recipe preparation time</label>
				<input class="form-control" type="number" name="recipe_prep_time" value=""><br>
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
				<input type="hidden" name="recipe_id" value="">
				<textarea class="form-control" name="recipe_descr"></textarea><br>
			</div>	
		</div>	
		<?php //echo mysqli_num_rows($result_recipe_products);  ?>

		<?php $product_inputs = 0; 
		while ($product_inputs < 10) {
			?>
			<div class="form-group">
				<div class="row">
					<?//products ?>
					<div class="col-md-4">
						<label class="control-label">Product #<?= ($product_inputs+1) ?></label>
						<select class="form-control" name="recipe_products[<?= $product_inputs ?>][product]">
							<option value="">--select product--</option>
							<?php 
							//available products - !!! THIS WAY EVERY TIME WE SEND DB QUERY
							$all_products_query = "SELECT * FROM products";
							$all_products_result = mysqli_query($conn, $all_products_query);

							if( mysqli_num_rows($all_products_result) > 0 ){
								 while($all_product = mysqli_fetch_assoc($all_products_result)){
								 //selecting of all products $product_inputs product of recipe
									$selected = '';
									if( isset( $recipe_products[$product_inputs] ) ){
										//	                           $recipe_products[0]['product_id'] = 1
										if( $all_product['product_id'] == $recipe_products[$product_inputs]['product_id']){
											$selected = "selected=true";
										}
								}
								?>
										<option value="<?= $all_product['product_id']?>" <?= $selected ?>><?= $all_product['product_name']?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4">						
						<label class="control-label">quantity</label>
						<input class="form-control" type="text" name="recipe_products[<?= $product_inputs ?>][quantity]" value="<?php echo isset( $recipe_products[$product_inputs]) ? $recipe_products[$product_inputs]['quantity'] : '' ?>">
					</div>
					<? //unit ?>
					<div class="col-md-4">	
						<label class="control-label">Unit #<?= ($product_inputs+1) ?></label>
						<select class="form-control" name="recipe_products[<?= $product_inputs ?>][unit]">
							<option value="">--select unit--</option>
							<?php 
								$all_units = "SELECT * FROM `units`";
								$all_units_result = mysqli_query($conn, $all_units_result);

								if (mysqli_num_rows($all_units_result) > 0 ) {
									 while($all_product = mysqli_fetch_assoc($all_units_result)){
									 	$selected = '';
									 	if( isset( $recipe_units[$product_inputs] ) ){
										//	                           $recipe_products[0]['product_id'] = 1
										if( $all_units['unit_id'] == $recipe_units[$unit_inputs]['unit_id']){
											$selected = "selected=true";
										}

									
								}
							?>
										<option value="<?= $unit['unit_id']?>" <?= $selected ?>><?= $unit['unit_name']?></option>
								<?php } ?>
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

 ?>