<?php
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
    <head>
        <meta charset="UTF-8">
        <title>tp</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>Civilité</label>
            <?php if ('gender' == 'Mme') {
                ?>
                <select name="gender" value="">
                    <option>Mme</option>
                    <option>Mr.</option>
                </select>
            <?php } else {
                ?>
                <select name="gender" value="">
                    <option>Mr.</option>
                    <option>Mme</option>
                </select>
            <?php }; ?>
            <label>Nom</label>
            <input type="text" name="lastName" value="<?= $lastName  ?>"</input>
            <label>Prénom</label>
            <input type="text" name="firstName" value="<?= $firstName ?>"></input>
            <label>Âge</label>
            <input name="year" value="<?= $year ?>"></input>
            <label>Société</label>
            <input type="text" name="job" value="<?= $job ?>"></input>
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>