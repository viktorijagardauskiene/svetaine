
<?php
include 'classes/db.php';

$db = new DB();
$result = $db->query("SELECT * FROM pages WHERE id = '1'");

$title = $result[0]['title'];
$body = $result[0]['body'];




include 'views/main.php';