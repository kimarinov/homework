<!DOCTYPE html>
<html>
<head>
	<title>Homework_9 Kaloyan</title>
</head>
<body>
<form action="" method="post" accept-charset="utf-8">
	Enter number<input type="text" name="num" >
	Submit<input type="submit" name="" >
</form>
<?php 

	if ((!empty($_POST))) {  
		$num = $_POST['num'];
		if (is_numeric($num)) {
			$i = 0;
			$var = 'a';
			
			while ($i < $num) {
				echo nl2br ("\n $var"); 
				$i++;
				$i2 = 1;
				while ($i2 < $i) {
					echo "$var";
					$i2++;
				}
				
			}
		}
		else{
			echo "Not a valid input";
		}
	}
 ?>
</body>
</html>