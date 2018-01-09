<?php

function get_info(){

	$id = $_GET['id'];

	$info = array();
	$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req = $db->query("SELECT * FROM film WHERE id = $id");
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
	<form method="get" action="edit-movie-form.php">
		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" name="id" id="id" class="form-control" value="<?= $i['id'] ?>" readonly>
			<label for="title">Titre</label>
			<input type="text" name="titre" id="title" class="form-control" placeholder="Titre du film" value="<?= $i['titre'] ?>">
			<label for="date">Date de sortie</label>
			<input type="date" name="date" id="date" class="form-control" placeholder="Date de sortie" value="<?= $i['date de sortie']; ?>">
			<label for="note">Note</label>
			<input type="number" name="note" id="note" class="form-control" min="0" max="5" placeholder="Note du film" value="<?= $i['note'] ?>">
			<label for="synopsis">Synopsis</label>
			<textarea name="synopsis" id="synopsis" class="form-control" placeholder="Synopsis"><?= $i['synopsis'] ?></textarea>
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
</section>

<?php endforeach; ?>