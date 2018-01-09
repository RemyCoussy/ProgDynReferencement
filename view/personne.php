<?php
foreach($info as $i):
?>
        <section class="container-fluid biography">
        	<div class="col-md-6" style="background:url(<?= $i['chemin'] ?>) center center;background-size:cover; margin:0 15px 0 -15px;">
        	</div>
        	<div class="col-md-6" style="display: flex;flex-direction: column;justify-content: center;">
        		<div class="col-md-12">
        			<div class="row">
        				<a href="/delete-person.php?id=<?= $_GET['id'] ?>" class="btn"><i class="fas fa-times"></i>Supprimer</a>
                		<a href="/edit-person.php?id=<?= $_GET['id'] ?>" class="btn"><i class="fas fa-edit"></i>Éditer</a>
                	</div>
        		</div>
        		<h2><?= $i['prenom'] ?> <?= $i['nom']?></h2>
                <p>Date de naissance : <?= $i['date de naissance'] ?></p>
                <p><?= $i['biographie'] ?></p>
        	</div>
        </section>
<?php endforeach; ?>