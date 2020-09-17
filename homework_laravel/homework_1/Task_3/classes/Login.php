<?php 

class Login {

	private $username;
	private $password;
	private $json_encoded;
	private $json_data;

	public function __construct($usernameForm, $passwordForm){
		//Get the data from the form
		$this->username = $usernameForm;
		$this->password = $passwordForm;
		// Get the data from the file with the registered users
		$this->get_data();
	}

	private function get_data(){
		// Get the data from the JSON data file 
		$this->json_encoded = file_get_contents("../data/data.json");
		$this->json_data = json_decode($this->json_encoded, true);
		// Validate the username
		$this->validation();
	}

	private function validation(){
		// Validate the username
		$this->username = filter_var($this->username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		// Check if the ser is in the file with the registered users
		$this->check_user();
	}

	private function check_user(){
		foreach ($this->json_data['data'] as $v) {
			// Check if the username is in the file with the registered users 
			if ($v['username'] === $this->username) {
				if ($v['password'] === $this->password) {
					$_SESSION['loggedin'] = true;
					$_SESSION['role'] = $v['role'];
					$_SESSION['username'] = $v['username'];
					// Check the user role and if it is admin navigate to the admin panel
					if ($v['role'] === "admin") {
						exit(header("Location: admin_panel.php"));
					}else{	
						// If the user role is plain user navagte to the user panel
						exit(header("Location: user_panel.php"));
					}

				}else{
					// Send some error info to JS and add a notice to the user
					// Error: Not correct password
					$_SESSION['error'] = 'Password does not match';
					exit(header("Location: login.php"));
				}
			}// End of username if
		}// End of foreach
		$_SESSION['error'] = 'Account with this username does not exist';
		exit(header("Location: login.php"));
	}

	public function logout(){
		session_destroy();

		exit(header("Location: login.php"));
	}
}