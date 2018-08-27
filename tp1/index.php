<?php
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>tp</title>
    </head>
    <body>
        <?php if (empty($_POST)) {
            ?>
            <form action="index.php" method="POST">
                <p>Nom</p>
                <input type="text" name="lastName"></input>
                <p>Prénom</p>
                <input type="text" name="firstName"></input>
                <p>Date de naissance</p>
                <input name="dateOfBirth"></input>
                <p>Pays de naissance</p>
                <input type="text" name="countryOfBirth"></input>
                <p>Nationalité</p>
                <input type="text" name="nationality"></input>
                <p>Adresse</p>
                <input type="text" name="adress"></input>
                <p>Email</p>
                <input type="text" name="mail"></input>
                <p>Téléphone</p>
                <input name="phone"></input>
                <p>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</p>
                <input type="text" name="degree"></input>
                <p>Numéro pôle emploi</p>
                <input name="numerope"></input>
                <p>Nombre de badge (facultatif)</p>
                <input name="badge"></input>
                <p>Liens codecademy (facultatif)</p>
                <input type="text" name="codeAca"></input>
                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</p>
                <textarea name="super"></textarea>
                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
                <textarea name="hacks"></textarea>
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                <textarea name="exp"></textarea>
                <input type="submit" value="Envoyer" />
            </form>
            <?php
        } else {
            if (isset($_POST['lastName'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['lastName'])) {
                        echo 'Nom : ' . $_POST['lastName'];
                    } else {
                        echo ' le champ nom n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['firstName'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['firstName'])) {
                        echo 'Prénom : ' . $_POST['firstName'];
                    } else {
                        echo ' le champ prénom n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['dateOfBirth'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexDate, $_POST['dateOfBirth'])) {
                        echo 'Date de naissance : ' . $_POST['dateOfBirth'];
                    } else {
                        echo ' le champ date de naissance n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['countryOfBirth'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['countryOfBirth'])) {
                        echo 'Pays de naissance : ' . $_POST['countryOfBirth'];
                    } else {
                        echo ' le champ pays de naissance n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['nationality'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['nationality'])) {
                        echo 'Nationalité : ' . $_POST['nationality'];
                    } else {
                        echo ' le champ nationalité n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['adress'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexAddress, $_POST['adress'])) {
                        echo 'Adresse : ' . $_POST['adress'];
                    } else {
                        echo ' le champ adresse n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['mail'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexMail, $_POST['mail'])) {
                        echo 'Email : ' . $_POST['mail'];
                    } else {
                        echo ' le champ Email n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['phone'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPhoneNumber, $_POST['phone'])) {
                        echo 'Téléphone : ' . $_POST['phone'];
                    } else {
                        echo ' le champ téléphone n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['degree'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['degree'])) {
                        echo 'Diplôme : ' . $_POST['degree'];
                    } else {
                        echo ' le champ diplôme n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['numerope'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexNumberLetter, $_POST['numerope'])) {
                        echo 'Numéro pôle emploi : ' . $_POST['numerope'];
                    } else {
                        echo ' le champ numéros pôle emploi n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['badge'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['badge'])) {
                        echo 'Nombre de badge : ' . $_POST['badge'];
                    } else {
                        echo ' vous n\'avez pas de badge codecademy';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['codeAca'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['codeAca'])) {
                        echo 'Liens codecademy : ' . $_POST['codeAca'];
                    } else {
                        echo ' Vous n\'avez pas de lien codecademy';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['super'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['super'])) {
                        echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? ' . $_POST['super'];
                    } else {
                        echo ' le champ superhéro n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['hacks'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['hacks'])) {
                        echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) ' . $_POST['hacks'];
                    } else {
                        echo ' le champ hacks n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['exp'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['exp'])) {
                        echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? ' . $_POST['exp'];
                    } else {
                        echo ' le champ expérience n\'est pas valide ';
                    }
                    ?>
                </p>
                <?php
            }
        }
        ?>
    </body>
</html>