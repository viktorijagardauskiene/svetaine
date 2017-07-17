
<?php
include 'classes/db.php';

$page_id = isset($_GET['page']) ? $_GET['page'] : 1; // if funkcijos sutrumpinimas

/* if (isset($_GET['page'])) {
	$page_id = $_GET['page'];
} else {
	$page_id = 1;
} */

$db = new DB();
$result = $db->query("SELECT * FROM pages WHERE id = '1'");

$title = $result[0]['title'];
$body = $result[0]['body'];




include 'views/main.php';