<?php
$db_host = 'localhost'; // Server Name
$db_user = 'sportifs'
;$db_pass = 'N@geon$'
;$db_name = 'tickets'
;$language = 'fr';
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
