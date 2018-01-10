<?php

function get_info(){

	$id = $_GET['id'];

	$info = array();
	$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req = $db->query("SELECT * FROM personne WHERE id = $id");
	if ($req->rowCount() > 0){
        while ($data=$req->fetch(PDO::FETCH_ASSOC))
       	{
            $info[] = $data;
       	}
       	return $info;
        } else{
        	echo 'page vide';
        	$info = null;
        }
}

include 'header.php';

$info = get_info();

foreach ($info as $i):
?>

<section class="container" style="padding-top: 100px;">
	<form method="get" action="edit-person-form.php">
		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" name="id" id="id" class="form-control" value="<?= $i['id'] ?>" readonly>
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="<?= $i['nom'] ?>">
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" value="<?= $i['prenom'] ?>">
			<label for="date">Date de naissance</label>
			<input type="date" name="date" id="date" class="form-control" placeholder="Date de naissance" value="<?= $i['date de naissance']; ?>">
			<label for="biographie">Biographie</label>
			<textarea name="biographie" id="biographie" class="form-control" placeholder="Biographie"><?= $i['biographie'] ?></textarea>
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
</section>

<?php endforeach; ?>