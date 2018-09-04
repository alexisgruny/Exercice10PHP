<?php
//Déclaration des regex
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
$regexNumber = '/^[0-9]+$/';
$lastName = !empty($_POST['lastName']) ? preg_match($regexText, $_POST['lastName']) ? $_POST['lastName'] : 'Incorrect' : ' Nom';
$firstName = !empty($_POST['firstName']) ? preg_match($regexText, $_POST['firstName']) ? $_POST['firstName'] : 'Incorrect' : ' Prénom';
$year = !empty($_POST['year']) ? preg_match($regexNumber, $_POST['year']) ? $_POST['year'] :  'Incorrect' : 'Âge';
$job = !empty($_POST['job']) ? preg_match($regexText, $_POST['job']) ? $_POST['job'] : 'Incorrect' : 'Société';
$gender = !empty($_POST['gender']) ? $_POST['gender'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <head>
        <meta charset="UTF-8">
        <title>tp</title>
    </head>
    <body>
        <!--Créatio du formulaire-->
        <h1>Formulaire</h1>
        <form action="index.php" method="POST">
            <label class="col-md-6">Civilité</label>
            <!--Si Mme est choisi , garder en mémoire Mme-->
            <?php if ('gender' == 'Mme') {
                ?>
                <select name="gender" value="" class="col-md-6">
                    <option>Mme</option>
                    <option>Mr.</option>
                </select>
            <!--Si Mr est choisi , garder en mémoire Mr-->
            <?php } else {
                ?>
                <select name="gender" value="" class="col-md-6">
                    <option>Mr.</option>
                    <option>Mme</option>
                </select>
            <?php }; ?>
            <!-- Garde en mémoire les informations saisies-->
            <label class="col-md-6">Nom</label>
            <input class="col-md-6" type="text" name="lastName" value="<?= $lastName  ?>"</input>
            <label class="col-md-6" >Prénom</label>
            <input class="col-md-6" type="text" name="firstName" value="<?= $firstName ?>"></input>
            <label class="col-md-6">Âge</label>
            <input class="col-md-6" name="year" value="<?= $year ?>"></input>
            <label class="col-md-6" >Société</label>
            <input class="col-md-6" type="text" name="job" value="<?= $job ?>"></input>
            <input class="col-md-12" type="submit" value="Envoyer" />
        </form>
    </body>
</html>