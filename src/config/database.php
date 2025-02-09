<?php
$host = 'localhost';
$user = 'root';
$pass = '151822';
$db   = 'php_clients';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
   die("Connection failed: " . $connection->connect_error);
}
