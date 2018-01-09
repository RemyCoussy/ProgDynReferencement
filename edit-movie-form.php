<?php

$id = $_GET['id'];
$titre = $_GET['titre'];
$date = $_GET['date'];
$note = $_GET['note'];
$synopsis = $_GET['synopsis'];

$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
$req = $db->query("UPDATE `film` SET `titre` = '$titre', `date de sortie` = '$date', `note` = '$note', `synopsis` = '$synopsis' WHERE `film`.`id` = $id");

include 'header.php';
?>
<section class="container">
	<h2>Félicitation</h2>
	<p>Vous avez modifié les données suivantes :<br>
	Titre du film : <?= $titre ?><br>
	Date de sortie : <?= $date ?><br>
	Note : <?= $note ?><br>
	Synopsis : <?= $synopsis ?>
	</p>
	<a href="index.php" class="btn"><i class="fas fa-long-arrow-alt-left"></i>Retour à l'accueil</a>

</section>