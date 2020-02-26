<!DOCTYPE html>
<html>
<head>
	<title>Homework_8_third_task_KALOYAN</title>
</head>
<body>
	<p>Choose day of week</p>
	<form action="" method="post" accept-charset="utf-8">
		<select name="day" multiple size="7">
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday" selected >Wednesday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
			<option value="Sunday">Sunday</option>
		</select>
		<input type="submit">
	</form>
	<?php 
	if (!empty($_POST)) {
		$day = $_POST['day'];
		switch ($day) {
			case 'Monday':
				echo "Laugh on Monday, laugh for danger.";
				break;
			
			case 'Tuesday':
				echo "Laugh on Tuesday, kiss a stranger.";
				break;
			case 'Wednesday':
				echo "Laugh on Wednesday, laugh for a";
				break;
			case 'Thursday':
				echo "letter. Laugh on Thursday, something";
				break;
			case 'Friday':
				echo "better. Laugh on Friday, laugh for";
				break;
			case 'Saturday':
				echo "sorrow. Laugh on Saturday, joy";
				break;
			case 'Sunday':
				echo "tomorrow.";
				break;		
		}
	}
		
	 ?>
</body>
</html>
<?php 
	
 ?>