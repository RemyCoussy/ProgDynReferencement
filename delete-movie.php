<?php

$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
$req = $db->query("DELETE FROM film WHERE id = $id");