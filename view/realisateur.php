<?php
foreach($info as $i):
?>
        <section>
                <h2><?= $i['prenom'] ?> <?= $i['nom']?></h2>
                <p>Date de naissance : <?= $i['date de naissance'] ?></p>
                <p><?= $i['biographie'] ?></p>
        </section>
<?php endforeach; ?>