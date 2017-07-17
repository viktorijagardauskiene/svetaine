<pre>
<?php
include 'db.php';

$db = new DB();
print_r($db->query("SELECT * FROM pages"));