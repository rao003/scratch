<?php

$db_host = 'localhost'; // Server Name

$db_user = ''; // Username

$db_pass = ''; // Password

$db_name = ''; // Database Name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {

	die ('Failed to connect to MySQL: ' . mysqli_connect_error());

}

echo "Connected successfully";

?>