<?php include 'header.php' ?>
<section class="container" style="padding-top: 100px;">
	<form method="get" action="create-movie-form.php">
		<div class="form-group">
			<label for="title">Titre</label>
			<input type="text" name="titre" id="title" class="form-control" placeholder="Titre du film">
			<label for="date">Date de sortie</label>
			<input type="date" name="date" id="date" class="form-control" placeholder="Date de sortie">
			<label for="note">Note</label>
			<input type="number" name="note" id="note" class="form-control" min="0" max="5" placeholder="Note du film">
			<label for="synopsis">Synopsis</label>
			<textarea name="synopsis" id="synopsis" class="form-control" placeholder="Synopsis"></textarea>
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
</section>
