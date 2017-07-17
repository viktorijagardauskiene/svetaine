<?php
class DB {
	private $db_hostname = 'localhost';
	private $db_username = 'ViktorijaG';
	private $db_password = 'kashtankai15';
	private $db = 'viktorijag';
	private $conn;

	//prisijungiam prie db
	function __construct() {
		try {
			    $this->conn = new PDO("mysql:host=$this->db_hostname;dbname=$this->db", $this->db_username, $this->db_password);
			    // set the PDO error mode to exception
			   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   //echo "Connected successfully";
		    }
		catch(PDOException $e) {
		    	echo "Connection failed: " . $e->getMessage();
		    }
	}

	// ivykdom koda/uzklausa ir grazinam reiksmes
	public function query($sql) {
		$query = $this->conn->query($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}




	// ir atsijungiam nuo db
	function __destruct() {
		$this->conn = null;
	}


}

