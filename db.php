<?php
$host = 'localhost';
$user = 'root';
$pass = 'xxxx';
$db = 'lo_user_auth';

$conn = new mysqli($host, $user, 'xxxx', $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>