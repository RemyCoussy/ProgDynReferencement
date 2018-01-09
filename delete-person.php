<?php

$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
$req = $db->query("DELETE FROM personne WHERE id = $id");

include 'header.php';
?>
<section class="container">
	<div>
		<h2>Suppression réussie</h2>
		<a href="index.php" class="btn"><i class="fas fa-long-arrow-alt-left"></i>Retour à l'accueil</a>
	</div>
</section>