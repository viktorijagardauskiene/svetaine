

<?php
session_start();

include 'classes/config.php';
include 'classes/db.php';
include 'classes/pages.php';
include 'classes/banners.php';
include 'classes/users.php';
include 'classes/log.php';

Log::add('index.php', 'page was opened');

$config = Config::getConfig();


$page = Pages::getSinglePage($page_slug);
$menu = Pages::getMenu();
$banners = Banners::getBanners();

$user = new Users();

if (isset($_POST['username']) && $_POST['username'] != null) {
	// bandoma prisijungti

	$user->login($_POST['username'], $_POST['password']);
	Log::add('index.php', 'trying to login');
}

if (isset($_POST['logout']) && $_POST['logout'] !=null) {
	//bandoma atsijungti
	$user->logout();
	Log::add('index.php', 'trying to logout');
}

if (isset($_GET['page']) && $_GET['page'] != null) {
	if ($_GET['page'] == "banner-edit") {
		// susikuriam reikalingus objektus ir includinam papildomas klases reikalingas banneriu redagavimui
		include 'views/banner-edit.php';
		die();
}
	$page_slug = $_GET['page'];
	Log::add('index.php', 'opening '.$_GET['page'].'page');
} else {
	$page_slug = "home";
}

if (isset($_POST['title']) && $_POST['title'] !=null) {
	if ($_POST['id'] == "") {
		// kuriamas naujas puslapis
		Pages::createPage($_POST['slug'], $_POST['title'], $_POST['body']);
	} else {
		// bandoma atnaujinti puslapi
	
	//bandoma atnaujinti puslapi
	Pages::updatePage($_POST['id'], $_POST['slug'], $_POST['title'], $_POST['body']);
	}
}

if (isset($_GET['add'])) {
	$page->id = "";
	$page->title = "";
	$page->body = "";
	$page->slug = "";
}


if ($user->level == "admin") {
	include 'views/admin.php';
} else {

include 'views/main.php';
}