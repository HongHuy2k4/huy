<?php

$db_host = 'localhost';
$db_name = 'webck';
$user_name = 'root';
$user_password = '';

$conn = new mysqli($db_host, $user_name, $user_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
