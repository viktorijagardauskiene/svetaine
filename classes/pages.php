<?php
class Pages {

	public static function getSinglePage($slug) {
		$db = new DB();
		$page = $db->query("SELECT * FROM pages WHERE slug = '$slug'");
		return $page[0];
	}

	public static function getMenu() {
		$db = new DB();
		$menu = $db->query("SELECT id, title FROM pages");
		return $menu;
	}

} 