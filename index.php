

<?php
session_start();

include 'classes/config.php';
include 'classes/db.php';
include 'classes/pages.php';
include 'classes/banners.php';
include 'classes/users.php';

$config = Config::getConfig();

if (isset($_GET['page']) && $_GET['page'] != null) {
	$page_slug = $_GET['page'];
} else {
	$page_slug = "home";
}

$page = Pages::getSinglePage($page_slug);
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

if ($user->level == "admin") {
	include 'views/admin.php';
} else {

include 'views/main.php';
}