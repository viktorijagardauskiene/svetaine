<?php
class Pages {

	public static function getSinglePage($slug) {
		$db = new DB();
		$page = $db->query("SELECT * FROM pages WHERE slug = '$slug'");
		if ($page != null) {
		return $page[0];
	} else {
		echo "<h1>Page not found</h1>";
		die();
	}
	}

	public static function getPage($id, $title, $slug, $body) {
		$db = new DB();
		$page = $db->query("update table"); // namu darbai
		
	}

	public static function getMenu() {
		$db = new DB();
		$menu = $db->query("SELECT * FROM pages");
		return $menu;
	}

} 
// namu darbams pasidaryti puslapio redagavima