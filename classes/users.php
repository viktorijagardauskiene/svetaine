<?php

class Users {

	public $username = "Guest";
	public $level = "Guest";

	function __construct() {
		if (isset($_SESSION['username']) && $_SESSION['username'] != Null) { // patikrina ar vartotojas jau yra prisijunges
			$this->username = $_SESSION['username'];
			$this->level = $_SESSION['level'];
		}
	}

	public function login($user, $pass) {
		$db = new DB();
		$userRecord = $db->query("SELECT * from users WHERE username='$user'");
		if ($userRecord != Null) {
			// toks vartotojas yra
			if ($userRecord[0]->password == $pass) {
				// vartotojo slaptazodis tinka
				$_SESSION['username'] = $userRecord[0]->username;
				$_SESSION['level'] = $userRecord[0]->level;

			}
		}
	}

	public function logout() {
		unset($_SESSION);
		// session_destroy();
	}

}