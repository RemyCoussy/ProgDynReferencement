<?php require 'function.php'; ?>
<section>
	<h1>Interstellar</h1>
	<p>Date de sortie<time></time></p>
	<p>Note : <meter min="0" max="5" value="4"></meter></p>
</section>
<section>
			<h2>Noms des acteurs principaux</h2>
			<ul>
				<?php
				foreach($db->query("SELECT * FROM $data") as $row) {
    				echo '<li>'.$row['prenom'].' '.$row['nom'].'</li>';
				}
			?>
			</ul>
		</section>
		<article>
			<h2>Synopsis</h2>
			<p>Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.</p>
		</article>