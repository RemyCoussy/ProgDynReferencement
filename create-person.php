<?php include 'header.php' ?>
<section class="container" style="padding-top: 100px;">
	<form method="get" action="create-person-form.php">
		<div class="form-group">
			<label for="role">Rôle</label>
			<input type="text" name="role" id="role" class="form-control" value="<?= $_GET['role'] ?>" readonly>
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
			<label for="nom">Nom</label>
			<input type="nom" name="nom" id="nom" class="form-control" placeholder="Nom">
			<label for="date">Date de naissance</label>
			<input type="date" name="date" id="date" class="form-control" min="0" max="5">
			<label for="biographie">Biographie</label>
			<textarea name="biographie" id="biographie" class="form-control" placeholder="Biographie"></textarea>
			<label for="film">Associé au film</label>
			<select name="film" id="film" class="form-control">
				<?php 
				function get_titre(){
					$info = array();
					$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
					$req = $db->query("SELECT titre from film");
					if ($req->rowCount() > 0){
	        			while ($data=$req->fetch(PDO::FETCH_ASSOC)){
	                		$info[] = $data;
	        			}
	        			return $info;
	        		} else{
	        			echo 'page vide';
	        			$info = null;
	        		}
        		}
        		$info = get_titre();
        		foreach($info as $i):
				?>
				<option value="<?= $i['titre'] ?>"><?= $i['titre'] ?></option>
				<?php endforeach; ?>
			</select>
			<label for="img">Image/photographie</label>
			<input type="file" name="img" id="img" class="form-control">
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
</section>
