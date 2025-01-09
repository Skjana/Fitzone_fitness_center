<?php

$host = 'localhost:3307';
$db_user = 'root';
$db_pass = '';
$db_name = 'fitzone_db';

$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>