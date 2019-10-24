	
<?php

$user = 'root';
$pass = '';
$db = 'bolnica';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

mysqli_set_charset($db, "utf8");

?>
