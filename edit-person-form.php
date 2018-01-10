<?php

$id = $_GET['id'];
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$date = $_GET['date'];
$biographie = $_GET['biographie'];

$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
$req = $db->query("UPDATE `personne` SET `nom` = '$nom', `prenom` = '$prenom', `date de naissance` = '$date' WHERE `personne`.`id` = $id");
//`biographie` = '$biographie'

include 'header.php';
?>
<section class="container">
	<h2>Félicitation</h2>
	<p>Vous avez modifié les données suivantes :<br>
	Prénom : <?= $prenom ?><br>
	Nom : <?= $nom ?><br>
	Date de naissance : <?= $date ?><br>
	Biographie : <?= $biographie ?>
	</p>
	<a href="index.php" class="btn"><i class="fas fa-long-arrow-alt-left"></i>Retour à l'accueil</a>

</section>