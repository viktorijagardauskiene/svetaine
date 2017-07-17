<?php
class DB {
	private $db_hostname = 'localhost';
	private $db_username = 'ViktorijaG';
	private $db_password = 'kashtankai15';
	private $db = 'viktorijag';

	//prisijungiam prie db
	function __construct() {
		try {
			    $conn = new PDO("mysql:host=$this->db_hostname;dbname=$this->db", $this->db_username, $this->db_password);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   // echo "Connected successfully"; <<- nenaudojam nes viskas veikia
		    }
		catch(PDOException $e) {
		    	echo "Connection failed: " . $e->getMessage();
		    }
	}

	// ivykdom koda/uzklausa ir grazinam reiksmes


	// ir atsijungiam nuo db
	function __destruct() {

	}


}

$db = new DB();