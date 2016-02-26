<?php
$destinataire = 'julien.brandin@supinternet.fr';

$message_envoye = "message envoyé avec succès";
$message_non_envoye = "Problème d'envoie du mail, réessayer SVP";

if (isset($_POST['envoi'])) {
    $nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $objet = (isset($_POST['objet'])) ? $_POST['objet'] : '';
    $message = (isset($_POST['message'])) ? $_POST['message'] : '';

    if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')) {
        $headers = 'From:' . $nom . ' <' . $email . '>' . "\r\n";

        if (mail($destinataire, $objet, $message, $headers)) {
            echo '<p>' . $message_envoye . '</p>';
        } else {
            echo '<p>' . $message_non_envoye . '</p>';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, minimum-scale=0.20, initial-scale=1.0, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<main role="main">
    <ul id="menu">
        <li><a class="scroll" href="#">Accueil</a></li>
        <li><a class="scroll" href="#">Qui sommes nous ?</a></li>
        <li><a class="scroll" href="#">Contact</a></li>
    </ul>
    <div class="header">
        <a href="#" class="accueil">Accueil</a>
        <a href="#" class="about">Qui Sommes Nous ?</a>
        <a href="#" class="contact">Contact</a>
        <span class="navDown"></span>
        <span class="navUp"></span>
        <span class="selection"></span>
    </div>
    <p class="TextRemplissage">N'hésitez pas à remplir le formulaire pour tout renseignement supplémentaire</p>

    <form id="contact" method="post">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <br>
            <p><label for="nom">Nom <span class="red"> *</span></label><br><br><input type="text" id="nom" name="nom" tabindex="1"></p><br>
            <p><label for="nom">Prénom <span class="red"> *</span></label><br><br><input type="text" id="prenom" name="prenom" tabindex="2">
            </p><br>
            <p><label for="email">Email </label><span class="red"> *</span><br><br><input type="text" id="email" name="email" tabindex="3">
            </p><br>
        </fieldset>

        <fieldset>
            <legend>Votre message</legend>
            <br>
            <p><label for="objet">Objet </label><span class="red"> *</span><br><br><input type="text" id="objet" name="objet" tabindex="4">
            </p><br>
            <p><label for="message">Message </label><span class="red"> *</span><br><br><textarea id="message" name="message" tabindex="5" cols="30" rows="8"></textarea>
            </p>

            <input type="submit" class="send" name="envoi" value="Envoyer le formulaire !">
        </fieldset>
    </form>
    <div class="join">
        <span class="adress">
            <strong>Venez visiter nos locaux :</strong>
            <br><br>95 avenue Parmentier<br>75011 Paris<br>France
        </span>
        <img src="img/persologobulle.png" class="perso">

    </div>
</main>
</body>
</html>
