<?php
ini_set('display_errors', 'On');

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "iutweb";

$db = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8mb4', $username, $password);