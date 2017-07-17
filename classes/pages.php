<?php
class Pages {

	public static function getSinglePage($id) {
		$db = new DB();
		$page = $db->query("SELECT * FROM pages WHERE id = '$id'");
		return $page;
	}

} 