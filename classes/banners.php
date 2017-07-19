<?php

class Banners {
	public static function getBanners() {
		$db = new DB();
		$banners = $db->query("SELECT * FROM banners");
		return $banners;
	}
}