<?php 
$title = "Nous contacter";
require_once 'config.php';
require_once 'functions.php';
// Récupérer l'heure d'aujourd'hui
date_default_timezone_set('Europe/paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N')-1);
// Récupérer les créneaux d'aujourd'hui
$creneaux = CRENEAUX[$jour];
// Récupérer l'état d'ouverture du magasin
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum quae itaque, saepe adipisci delectus eveniet inventore labore doloribus consequuntur ducimus sed facere reprehenderit assumenda, ipsam temporibus, totam natus illum.</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        
        <?php if($ouvert): ?>
        <div class="alert alert-success">
            Le magasin sera ouvert
        </div>
        <?php else: ?>
        <div class="alert alert-danger">
            Le magasin sera fermé
        </div>
        <?php endif; ?>

        <form action="contact.php" method="GET">
            <h2>Sélectionnez le jour et l'heure</h2> <br>
            <div class="from-group">
                <?= select('jour', $jour, JOURS) ?>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>

        <ul>
            <?php foreach(JOURS as $k => $jour): ?> 
                <li>
                    <strong><?= $jour ?></strong>:
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<?php require 'footer.php'; ?>