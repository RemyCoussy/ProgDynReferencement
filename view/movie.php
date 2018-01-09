<?php foreach($info as $i): ?>
        <section class="container">
                <h2><?= $i['titre'] ?></h2>
                <a href="/delete-movie.php?id=<?= $_GET['id'] ?>" class="btn"><i class="fas fa-times"></i>Supprimer</a>
                <a href="/edit-movie.php?id=<?= $_GET['id'] ?>" class="btn"><i class="fas fa-edit"></i>Éditer</a>
                <p><strong>Date de sortie : </strong><?= $i['date de sortie'] ?></p>
                <p><strong>Note : </strong><meter max="5" min="0" value="<?= $i['note'] ?>"><?= $i['note'] ?></meter></p>
                <div class="row">
                    <div class="col-md-9">
                        <p class="synopsis"><strong>Synopsis :</strong><br><?= $i['synopsis'] ?></p>
                        <div class="row">
                        <?php foreach($character as $c): ?>
                            <div class="card col-md-4">
                                <img class="card-img-top" src="<?= $c['chemin'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $c['prenom'].' '.$c['nom'] ?></h4>
                                    <p class="card-text"><small><?= $c['role'] ?></small></p>
                                    <p class="card-text"><?= $c['légende'] ?></p>
                                    <a href="/controller/personne.php?id=<?= $c['id_personne'] ?>" class="btn">En savoir +</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <aside class="get-faq">
                            <button class="btn btn-primary charger">Charger</button>
                        </aside>        
                    </div>
                </div>
        </section>
<?php endforeach; ?>