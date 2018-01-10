<?php

$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$date = $_GET['date'];
$biographie = $_GET['biographie'];
$role = $_GET['role'];
$img = $_GET['img'];

$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
$req = $db->query("INSERT INTO personne (`prenom`, `nom`,`date de naissance`,`biographie`) 
	VALUES ('".$prenom."', '".$nom."', '".$date."', '".$biographie."')");
$req4 = $db->query("INSERT INTO photo (`chemin`) VALUES ('".$img."')");

function get_person_info(){

	$titre = $_GET['film'];
	$role = $_GET['role'];

	$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req2 = $db->query("SELECT max(personne.id) id, max(photo.id) img, film.id film FROM personne, film, photo WHERE titre='$titre'");
	$info = array();
	while ($data=$req2->fetch(PDO::FETCH_ASSOC)){
		$info[] = $data;
	}
	return $info;
}

$info = get_person_info();

foreach ($info as $i){
	$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req3 = $db->query("INSERT INTO film_has_personne (`id_film`, `id_personne`,`role`) 
	VALUES ('".$info['0']['film']."', '".$info['0']['id']."', '".$role."')");
	$req5 = $db->query("INSERT INTO personne_has_photo (`id_personne`, `id_photo`)
	VALUES ('".$info['0']['id']."', '/img/".$info['0']['img']."')");
}

include 'header.php';
?>
<section class="container">
	<h2>Félicitation</h2>
	<p>Vous avez ajouté les données suivantes :<br>
	Prénom de l'acteur : <?= $titre ?><br>
	Nom de l'acteur : <?= $nom ?><br>
	Date de naissance : <?= $date ?><br>
	Biographie : <?= $biographie ?>
	</p>
	<a href="index.php" class="btn"><i class="fas fa-long-arrow-alt-left"></i>Retour à l'accueil</a>
	<?php echo 'autre : '; var_dump($info); ?>
</section>
