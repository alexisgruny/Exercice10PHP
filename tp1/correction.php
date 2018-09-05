<?php
//Déclaration des regex
//WARNING
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$formError = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['lastName'])) {
    $lastName = $_POST['lastName'];
    if (!preg_match($regexName, $lastName)) {
        $formError['lastName'] = 'Saisie invalide.';
    }
    if (empty($lastName)) {
        $formError['lastName'] = 'Champ obligatoire.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <title>TP</title>
    </head>
    <body>
        <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
            <p><?= $lastName ?></p>
        <?php } else { ?>
            <form action="correction.php" method="POST">
                <div class="form-group">
                    <label for="lastName">Nom</label>
                    <input class="form-control"  id="lastName" type="text" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>" />
                    <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                    <label for="firstName">Prénom</label>
                    <input class="form-control" id="firstName" type="text" name="firstName" />
                    <label for="dateOfBirth">Date de naissance</label>
                    <input class="form-control" id="dateOfBirth" name="dateOfBirth" />
                    <label for="countryOfBirth">Pays de naissance</label>
                    <input class="form-control" id="countryOfBirth" type="text" name="countryOfBirth" />
                    <label for="nationality">Nationalité</label>
                    <input class="form-control" id="nationality" type="text" name="nationality" />
                    <label for="adress">Adresse</label>
                    <input class="form-control" id="adress" type="text" name="adress" />
                    <label for="mail">Email</label>
                    <input class="form-control" id="mail" type="text" name="mail" />
                    <label for="phone">Téléphone</label>
                    <input class="form-control" id="phone" name="phone" />
                    <label for="degree">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
                    <input class="form-control" id="degree" type="text" name="degree" />
                    <label for="numberPE">Numéro pôle emploi</label>
                    <input class="form-control" id="numberPE" name="numberPE" />
                    <label for="badge">Nombre de badge (facultatif)</label>
                    <input class="form-control" id="badge" name="badge" />
                    <label for="codeAca">Liens codecademy (facultatif)</label>
                    <input class="form-control" id="codeAca" type="text" name="codeAca" />
                    <label for="super">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <textarea id="super" name="super"></textarea>
                    <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea id="hacks" name="hacks"></textarea>
                    <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea id="exp" name="exp"></textarea>
                    <input class="form-control" type="submit" value="Envoyer" name="submit"/>
                </div>
            </form>
        <?php } ?>
    </body>
</html>

