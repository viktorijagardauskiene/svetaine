<?php

class Config {

	public static function getConfig() {
		$db = new DB();
		$config = $db->query("SELECT * FROM config");
		return $config[0];

	}


}