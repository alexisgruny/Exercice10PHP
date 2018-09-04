<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>
<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="assets/css/connection.css" type="text/css" />
        <title>tp</title>
    </head>
    <body>
        <div class="row justify-content-md-center">
            <?php
            //Déclaration de la fonction tableau
            tableau($portrait1);
            tableau($portrait2);
            tableau($portrait3);
            tableau($portrait4);
            //fonction qui permet d'afficher les données des tableaux
            function tableau($array) {
                ?>
                <div class="col-md-2">
                    <figure class="figure">
                        <img src="<?= $array['portrait'] ?>" class="figure-img img-fluid rounded" alt="Portrait">
                        <figcaption class="figure-caption text-center text-dark bg-warning"><?= $array['name'] . ' ' . $array['firstname'] ?></figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </body>
</html>