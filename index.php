
<pre>
<?php
include 'classes/db.php';
include 'classes/pages.php';

$page_id = isset($_GET['page']) ? $_GET['page'] : 1; 

$page = Pages::getSinglePage($page_id);
$menu = Pages::getMenu();


include 'views/main.php';