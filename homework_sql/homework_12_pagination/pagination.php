<?php 
function print_pagination($page_no, $total_no_of_pages, $direction, $orde){
		$adjacents = "1";
		$second_last = $total_no_of_pages - 1;
		$previous_page = $page_no - 1;
		$next_page = $page_no + 1;
		echo '<p><strong>Page ' . $page_no . ' of ' . $total_no_of_pages . '</strong> </p>';
		echo '<ul class="pagination">';
		if ($page_no > 1) {
			echo "<li><a href='?page_no=1&order=" . $order . "&direction=" . $direction . "#text'>First Page</a></li>";
		}
		echo '<li ';
		if ($page_no <= 1){ 
			echo "class='disabled'";
		}
		echo '>';
		echo '<a ';
		if ($page_no > 1){
			echo "href='?page_no=$previous_page&order=" . $order . "&direction=" . $direction . "#text'";
		} 
		echo '>Previous</a>';
		echo '</li>';
		if ($total_no_of_pages <= 11){   
			for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
				if ($counter == $page_no) {
					echo "<li class='active'><a>$counter</a></li>"; 
			    } else {
			    	echo "<li><a href='?page_no=$counter&order=" . $order . "&direction=" . $direction . "#text'>$counter</a></li>";
			    }
			}
		} elseif ($total_no_of_pages > 11){
			if($page_no <= 4) { 
				for ($counter = 1; $counter < 8; $counter++){ 
					if ($counter == $page_no) {
				    	echo "<li class='active'><a>$counter</a></li>"; 
					} else{
				        echo "<li><a href='?page_no=$counter&order=" . $order . "&direction=" . $direction . "#text'>$counter</a></li>";
				    }
				}
				echo "<li><a>...</a></li>";
				echo "<li><a href='?page_no=$second_last&order=" . $order . "&direction=" . $direction . "#text'>$second_last</a></li>";
				echo "<li><a href='?page_no=$total_no_of_pages&order=" . $order . "&direction=" . $direction . "#text'>$total_no_of_pages</a></li>";
			} elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) { 
				echo "<li><a href='?page_no=1&order=" . $order . "&direction=" . $direction . "#text'>1</a></li>";
				echo "<li><a href='?page_no=2&order=" . $order . "&direction=" . $direction . "#text'>2</a></li>";
				echo "<li><a>...</a></li>";
				for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) { 
				    if ($counter == $page_no) {
					 	echo "<li class='active'><a>$counter</a></li>"; 
					} else{
					    echo "<li><a href='?page_no=$counter&order=" . $order . "&direction=" . $direction . "#text'>$counter</a></li>";
					}                  
				}
				echo "<li><a>...</a></li>";
				echo "<li><a href='?page_no=$second_last&order=" . $order . "&direction=" . $direction . "#text'>$second_last</a></li>";
				echo "<li><a href='?page_no=$total_no_of_pages&order=" . $order . "&direction=" . $direction . "#text'>$total_no_of_pages</a></li>";
			} else {
				echo "<li><a href='?page_no=1'>1</a></li>";
				echo "<li><a href='?page_no=2'>2</a></li>";
				echo "<li><a>...</a></li>";
				for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++){
				    if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
					} else{
				        echo "<li><a href='?page_no=$counter&order=" . $order . "&direction=" . $direction . "#text'>$counter</a></li>";
					}                   
				}
			}
		}
		echo '<li '; 
		if ($page_no >= $total_no_of_pages){
			echo "class='disabled'";
		} 
		echo '>';
		echo '<a ';
		if ($page_no < $total_no_of_pages) {
			echo "href='?page_no=$next_page#text'";
		} 
		echo '>Next</a>';
		echo '</li>';			 
		if ($page_no < $total_no_of_pages){
			echo "<li><a href='?page_no=$total_no_of_pages&order=" . $order . "&direction=" . $direction . "#text'>Last &rsaquo;&rsaquo;</a></li>";
		}
		echo '</ul>';
	}