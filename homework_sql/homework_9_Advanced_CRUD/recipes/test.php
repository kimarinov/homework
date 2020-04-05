		<?php 
								if( !empty($all_units) ){
									foreach ($all_units as $unit) {
							?>
							<?php //selecting of all products $product_inputs product of recipe
								$selected = '';
									if( isset( $recipe_products[$product_inputs] ) ){
										if( $unit['unit_id'] == $recipe_products[$product_inputs]['unit_id']){
											$selected = "selected=true";
										}
									}
							?>
								