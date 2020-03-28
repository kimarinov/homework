<?php
	function get_id_and_name_from_countries($conn){
		$sql = "SELECT * FROM countries WHERE date_deleted IS NULL";
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	$array[$row['country_id']]= $row['name'];
		} 
		return $array;
	}

	function get_id_and_name_from_destinations($conn){
		$sql = "SELECT * FROM destinations WHERE date_deleted IS NULL";
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	$array[$row['destination_id']]= $row['destination_name'];
		} 
		return $array;
	}

	function get_id_and_name_from_countries_in_bin($conn){
		$sql = "SELECT * FROM countries WHERE date_deleted IS NOT NULL";
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	$array[$row['country_id']]= $row['name'];
		} 
		return $array;
	}

	function get_id_and_name_from_destinations_in_bin($conn){
		$sql = "SELECT * FROM destinations WHERE date_deleted IS NOT NULL";
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	$array[$row['destination_id']]= $row['destination_name'];
		} 
		return $array;
	}

	function get_all_from_database($conn, $database, $key){
		$sql = "SELECT " . $key . " FROM " . $database . " WHERE date_deleted IS NULL";
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	array_push($array, $row[$key]);
		} 
		return $array;
	}

	function get_all_from_database_without_null($conn, $database, $key){
		$sql = "SELECT " . $key . " FROM " . $database;
		$result = mysqli_query($conn, $sql);
		$array = array();
		while($row = mysqli_fetch_assoc($result)){ 
		 	array_push($array, $row[$key]);
		} 
		return $array;
	}

	function add_new_country_to_database($conn, $country){
		$sql = "INSERT INTO countries (name) VALUES ('" . $country . "')";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	function add_new_destination_to_database($conn, $destination, $country_id){
		$sql = "INSERT INTO destinations (destination_name, country_id) VALUES ('" . $destination . "', " . $country_id . ")";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	function display_array_in_li($array){
		foreach ($array as $value) {
			echo '<li>' . $value . '</li>';
		}
	}

	function return_all_countries(){
		$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote D'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and Mcdonald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran, Islamic Republic of", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia, the Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Viet Nam", "Virgin Islands, British", "Virgin Islands, U.s.", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe");
		return $countries;	
	}
?>