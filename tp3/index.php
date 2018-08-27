<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
tableau($portrait1);
tableau($portrait2);
tableau($portrait3);
tableau($portrait4);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>tp</title>
    </head>
    <body>
    <?php
    function tableau($array){
    ?>  
    <p>
        <?php
        echo $array['name'];
        ?>
    </p>
    <p>
    <?php
    echo $array['firstname'];
    ?>
    </p>
    <img src="<?php
    echo $array['portrait']
            ?>" />
    <?php
    }
    ?> 
    </body>
</html>