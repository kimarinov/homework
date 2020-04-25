<?php 
include '../includes/db_connect.php';
$title = 'read products';
include '../includes/header_inner.php';
//1 count number of results
$count_products_query = "SELECT COUNT(*) AS number_of_products FROM `products` WHERE `date_deleted` IS NULL";
$result_count = mysqli_query($conn, $count_products_query);

if( $result_count ){
	$row_count = mysqli_fetch_assoc( $result_count );
	// var_dump($row_count['number_of_products']);
}

//2 set results per page to display
$products_per_page = 1;

//3 calculate pages for pagination
$number_of_pages = $row_count['number_of_products']/$products_per_page;
$number_of_pages = ceil($number_of_pages);


//4 - see pagination block

//5 - set default page parameter in the url leading to this script - 
//first time we visit this page - we retrieve the first set result
//see ../includes/header_inner.php';

//6 get current page number from the request
$current_page = $_GET['page'];

//7 set page param in the links in the pagination block, see below

//8 retrieve set of products, LIMIT = products_per_pages, skip = (current_page - 1)*products_per_page
$limit = $products_per_page;
$skip = ( $current_page - 1 ) * $products_per_page;
$read_query = "SELECT * FROM `products` WHERE `date_deleted` IS NULL LIMIT $skip, $limit";
// var_dump($read_query);

$result = mysqli_query($conn, $read_query);

// 9 - set dinamically active class - the current page number to be distinguished among others - see bellow
//10 - set previous and next link  - see bellow
//11 HW - set first and last page link - see bellow
//12 - hide previous - if we are on the first page - see bellow
//13 - hide next - if we are on the last page
//14 optional - set number of each result - first page - 1-5, second page 6-10 etc - see bellow

if( mysqli_num_rows($result) > 0 ){
	?>
	<h1 class="text-danger">If products in your database are less than 11 the task pagination will not work!!! Check if the count of items in your database are not dividable to 2!!!</h1>
	<div class="row">
		<div class="col-sm-1 col-sm-offset-5">
			<a href="create.php" class="btn btn-info">ADD NEW</a>
		</div>
	</div>
	<div class="row">
		<table style="margin-left: 50px" class="table table-striped">
			<tr>
				<td>#</td>
				<td>Product</td>
				<td>Image</td>
				<td>***</td>

			</tr>
			<?php
			// 14 optional - set number of each result - first page - 1-5, second page 6-10 etc
			$num = (( $current_page - 1 ) * $products_per_page) + 1;
			while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>					
					<td><?= $num ++?></td>
					<td><?= $row['product_name'] ?></td>	
					<td><img src="<?= $row['image'] ?>" width="100"></td>	
					<td>***</td>	
				</tr>
				<?php
			}
			?>
		</table>
	</div>
	<?php 
	if ($number_of_pages < 11) {
	?>
		<!-- pagination -->
		<nav aria-label="..." style="margin-left: 50px">
	  		<ul class="pagination">
	  			<!-- disable if first page -->
	  			<?php 
	  			//10 check we are not on the first page
	  			if( $current_page != 1 ){ 
	  				//previous link must lead to page - 1
	  				$previous_num = $current_page - 1;
	  				?>
	  				<li><a href="index.php?page=1"><span aria-hidden="true">&larr;</span> First</a></li>
					<li class="previous"><a href="index.php?page=<?= $previous_num ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
	  			<?php } ?>
	  			<!-- step 4 - display number os pages in the pagination block -->
	  			<?php 
	  			$current_num = 1;
	  			while ($current_num <= $number_of_pages ){ ?>
					<!-- 7 - set page number requested in each page button -->
					<!-- 9 - set dinamically active class - the current page number to be distinguished among others -->
					<?php 
					$active_class = '';
					if( $current_page == $current_num ){
						$active_class = 'active';
					}
					?>
		  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $current_num ?>"><?= $current_num ?><span class="sr-only">(current)</span></a></li>
		  			<?php $current_num++; } ?>
		  			<?php 
		  			// 12 - check this is not the last page
		  			if( $current_page != $number_of_pages ){
		  				//next link must lead to page + 1
	  					$next_num = $current_page + 1;
		  			?>
		    		<li class="next"><a href="index.php?page=<?= $next_num ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
		    		<li class="next"><a href="index.php?page=<?= $number_of_pages ?>">Last <span aria-hidden="true">&rarr;</span></a></li>
		    	<?php } ?>
	  		</ul>
		</nav>
		<?php

	}else{
		//If number of products/pages are more than 11
		?>
		<nav aria-label="..." style="margin-left: 50px">
	  		<ul class="pagination">

	  			<!-- disable if first page -->
	  			<?php 
	  			//10 check we are not on the first page
	  			if( $current_page != 1 ){ 
	  				//previous link must lead to page - 1
	  				$previous_num = $current_page - 1;
	  				?>
	  				<li><a href="index.php?page=1"><span aria-hidden="true">&larr;</span> First</a></li>
					<li class="previous"><a href="index.php?page=<?= $previous_num ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
	  			<?php } ?>
	  			<!-- step 4 - display number os pages in the pagination block -->
	  			<?php 
	  			$half_pages = $number_of_pages/2;
	  			if ($current_page > 4) {
	  				
					for ($k = 1; $k <= 3; $k++) {
						?>
			  			<li><a href="index.php?page=<?= $k ?>"><?= $k ?><span class="sr-only">(current)</span></a></li>
			  			<?php 
			  		}
			  		?>
					<li><a href="#">..........................</a></li>
			  		<?php
	  			}
	  			if ($current_page+3 < $half_pages) {
	  					// page printing
		  			if ($current_page+2 < $number_of_pages) {	
		  				for ($i = $current_page; $i <= $current_page+2; $i++) {
							$active_class = '';
							if( $current_page == $i ){
								$active_class = 'active';
							}
							?>
				  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $i ?>"><?= $i ?><span class="sr-only">(current)</span></a></li>
				  			<?php 
				  		}
		  			}else{
		  				for ($m = $number_of_pages-2; $m <= $number_of_pages; $m++) {
							$active_class = '';
							if( $current_page == $m ){
								$active_class = 'active';
							}
							?>
				  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $m ?>"><?= $m ?><span class="sr-only">(current)</span></a></li>
				  			<?php 
				  		}
		  			}	
			  		?>
					<li><a href="#">..........................</a></li>
			  		<?php
			  			//Middle
		  			if ($current_page <= (int)$half_pages+3 || $current_page >= (int)$half_pages-3) {
		  				for ($l = (int)$half_pages; $l <= (int)$half_pages+2; $l++) {
							?>
				  			<li><a href="index.php?page=<?= $l ?>"><?= $l ?><span class="sr-only">(current)</span></a></li>
				  			<?php 
				  		}
				  		?>
						<li><a href="#">..........................</a></li>
				  		<?php
		  			}
	  			}elseif ($current_page-3 > $half_pages) {
	  				
	  					//Middle
	  		
		  			if ($current_page <= (int)$half_pages+3 || $current_page >= (int)$half_pages-3) {

		  				for ($j = (int)$half_pages; $j <= (int)$half_pages+2; $j++) {

		  					$active_class = '';
							if( $current_page == $j ){
								$active_class = 'active';
							}
							?>
				  			<li><a href="index.php?page=<?= $j ?>"><?= $j ?><span class="sr-only">(current)</span></a></li>
				  			<?php 
				  		}
				  		if ($current_page+5 < $number_of_pages){
				  			
				  		?>
						<li><a href="#">..........................</a></li>
				  		<?php
				  		}
		  			}
		  			else{
		  				
		  				?>
						<li><a href="#">..........................</a></li>
				  		<?php
		  			}	
			  				// page printing
			  		if ($current_page+5 < $number_of_pages) {
			  			
			  			if ($current_page+2 < $number_of_pages) {	
			  				
			  				for ($h = $current_page; $h <= $current_page+2; $h++) {
								$active_class = '';
								if( $current_page == $h ){
									$active_class = 'active';
								}
								?>
					  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $h ?>"><?= $h ?><span class="sr-only">(current)</span></a></li>
					  			<?php 
					  		}
			  			}else{
			  				for ($g = $number_of_pages-2; $g <= $number_of_pages; $g++) {
								$active_class = '';
								if( $current_page == $g ){
									$active_class = 'active';
								}
								?>
					  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $g ?>"><?= $g ?><span class="sr-only">(current)</span></a></li>
					  			<?php 
					  		}
			  			}
			  		}
	  			}else{
	  				if ($current_page <= (int)$half_pages+3 || $current_page >= (int)$half_pages-3) {

		  				for ($o = (int)$half_pages-3; $o <= (int)$half_pages+3; $o++) {
		  					$active_class = '';
							if( $current_page == $o ){
								$active_class = 'active';
							}
							?>
				  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $o ?>"><?= $o ?><span class="sr-only">(current)</span></a></li>
				  			<?php 
				  		}
				  		?>
						<li><a href="#">..........................</a></li>
				  		<?php
		  			}
		  			else{
		  				?>
						<li><a href="#">..........................</a></li>
				  		<?php
		  			}	
	  			}
		  		if ($current_page+5 >= $number_of_pages) {
		  			if ($current_page+3 >= $half_pages) {
		  			?>
						<li><a href="#">..........................</a></li>
				  	<?php 
				  	 }
				  	for ($v = $number_of_pages-5; $v <= $number_of_pages; $v++) {
				  		$active_class = '';
							if( $current_page == $v ){
								$active_class = 'active';
							}
						?>
			  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $v ?>"><?= $v ?><span class="sr-only">(current)</span></a></li>
			  			<?php 
			  		}
		  		}else{
		  			if ( $current_page-4 >= $half_pages) {
		  				
		  			?>
						<li><a href="#">..........................</a></li>
				  	<?php 
				  	 }
				  	for ($s= $number_of_pages-3; $s <= $number_of_pages; $s++) {
				  		$active_class = '';
				  		if( $current_page == $s ){
								$active_class = 'active';
							}
						?>
			  			<li class="<?= $active_class ?>"><a href="index.php?page=<?= $s ?>"><?= $s ?><span class="sr-only">(current)</span></a></li>
			  			<?php 
			  		}
		  		}
		  			if( $current_page != $number_of_pages ){
		  				//next link must lead to page + 1
	  					$next_num = $current_page + 1;
		  			?>
		    		<li class="next"><a href="index.php?page=<?= $next_num ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
		    		<li class="next"><a href="index.php?page=<?= $number_of_pages ?>">Last <span aria-hidden="true">&rarr;</span></a></li>
		    	<?php } ?>
	  		</ul>
		</nav>
	<?php
	}
}
?>

<?php 
include '../includes/footer.php'
?>