

<?php
session_start();

include 'classes/db.php';
include 'classes/pages.php';
include 'classes/banners.php';
include 'classes/users.php';

$page_id = isset($_GET['page']) ? $_GET['page'] : 1; 

$page = Pages::getSinglePage($page_id);
$menu = Pages::getMenu();
$banners = Banners::getBanners();

$user = new Users();

if (isset($_POST['username']) && $_POST['username'] != null) {
	// bandoma prisijungti

	$user->login($_POST['username'], $_POST['password']);
}


include 'views/main.php';