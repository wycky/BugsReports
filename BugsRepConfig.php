<?php
$db_host = 'localhost'; // Server Name
$db_user = 'username';
$db_pass = 'Password';
$db_name = 'dbname';
$language = 'en';
$BugsDir = 'http://127.0.0.1/Bugs/';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
