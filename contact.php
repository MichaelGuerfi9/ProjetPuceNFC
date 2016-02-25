<?php
$destinataire = 'julien.brandin@supinternet.fr';

$message_envoye = "message envoyé avec succès";
$message_non_envoye = "Problème d'envoie du mail, réessayer SVP";
 
if (isset($_POST['envoi']))
{
	$nom     = (isset($_POST['nom']))     ? $_POST['nom'] : '';
	$email   = (isset($_POST['email']))   ? $_POST['email'] : '';
	$objet   = (isset($_POST['objet']))   ? $_POST['objet'] : '';
	$message = (isset($_POST['message'])) ? $_POST['message'] : '';

	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		
		if (mail($destinataire, $objet, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		}
	}
	else
	{
		echo '<p>'.$message_non_envoye.'</p>';
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form id="contact" method="post">
    <fieldset><legend>Vos coordonnées</legend>
        <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
        <p><label for="email">Email :</label><input type="text" id="email" name="email" tabindex="2" /></p>
    </fieldset>

    <fieldset><legend>Votre message :</legend>
        <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" tabindex="3" /></p>
        <p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
    </fieldset>

    <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
</form>
</body>
</html>
