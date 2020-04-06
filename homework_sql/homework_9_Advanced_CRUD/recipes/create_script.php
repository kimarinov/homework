<?php 
include '../includes/db_connect.php';
echo '<pre>';
//var_dump($_POST);
echo '</pre>';
if( !empty($_POST['recipe_name']) ){
		//create recipe
		$insert_recipre_query = "INSERT INTO `recipes`(`recipe_name`, `recipe_descr`, `prep_time`) VALUES ('".$_POST['recipe_name']."', '".$_POST['recipe_descr']."', '".$_POST['recipe_prep_time']."')";
		//var_dump($insert_recipre_query);
		$create_res = mysqli_query($conn, $insert_recipre_query);
			if( !$create_res ){
				die('Create failed!' . mysqli_error($conn));
			}else {
				//do something useful
			}

		$recipe_id_query = "SELECT `recipe_id` FROM `recipes` WHERE `recipe_name` = '".$_POST['recipe_name']."'";
		//var_dump($recipe_id_query);
		$recipe_id_result = mysqli_query($conn, $recipe_id_query);
		if ( !$recipe_id_result){
			die('Create failed!' . mysqli_error($conn));
		}
		$recipe_id  = mysqli_fetch_array($recipe_id_result);
		//create recipes products						
			foreach ($_POST['products'] as $product) {
				if( !empty( $product['product']) ){
					// echo "<pre>";
					// var_dump($product);
					// echo "</pre>";
					$product_query = "INSERT INTO `recipes_products_queantities_units`(`recipe_id`, `product_id`, `quantity`, `unit_id`) ";
					$product_query .= "VALUES (" . (int)$recipe_id. "," . (int)$product['product']. "," . (float)$product['quantity']. "," . (int)$product['unit'] . ")";
					var_dump($product_query);				
					$create_res = mysqli_query($conn, $product_query);	
					//var_dump($product_query);			
				}
			}
			//header("Location: index.php");

	}