

<?php
session_start();

include 'classes/config.php';
include 'classes/db.php';
include 'classes/pages.php';
include 'classes/banners.php';
include 'classes/users.php';

$config = Classes::getConfig();

$page_id = isset($_GET['page']) ? $_GET['page'] : 1; 

$page = Pages::getSinglePage($page_id);
$menu = Pages::getMenu();
$banners = Banners::getBanners();

$user = new Users();

if (isset($_POST['username']) && $_POST['username'] != null) {
	// bandoma prisijungti

	$user->login($_POST['username'], $_POST['password']);
}

if (isset($_POST['logout']) && $_POST['logout'] !=null) {
	//bandoma atsijungti
	$user->logout();
}


include 'views/main.php';