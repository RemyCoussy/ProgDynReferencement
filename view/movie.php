<?php
foreach($info as $i):
?>
        <section class="container">
                <h2><?= $i['titre'] ?></h2>
                <p>Date de sortie : <?= $i['date de sortie'] ?></p>
                <p>Note : <meter max="5" min="0" value="<?= $i['note'] ?>"><?= $i['note'] ?></meter></p>
                <p><?= $i['synopsis'] ?></p>
        </section>
<?php endforeach; ?>