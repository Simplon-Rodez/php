<?php

/**
*
* Créer un formulaire qui demande un login et un mot de passe
* puis une fois le formulaire validé, afficher :
* 
* - Le login
* - Le mot de passe
* - L'adresse ip du client
*/

$login = '';
$password = '';
$html = '';
$has_error = false;

if (isset($_POST['submit'])) {
    
    if (empty($_POST['login'])) {
        $has_error = true;
    } else {
        $login = $_POST['login'];
    }

    if (empty($_POST['password'])) {
        $has_error = true;
    } else {        
        $password = $_POST['password'];
    }

}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 1</title>
</head>
<body>
    <form method="post">
        <label for="login">Identifiant</label>
        <input type="text" id="login" name="login" placeholder="john@doe.com">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" placeholder="mot de passe">
        <input type="submit" value="valider" name="submit">
    </form>

    <?php
        if (isset($_POST['submit']) && !$has_error) {
            $html.= '<p>Votre identifiant est : <strong>' . $login . '</strong></p>';
            $html.= '<p>Votre mot de passe est : <strong>' . $password . '</strong></p>';
            $html.= '<p>Votre addresse IP est : <strong>' . $_SERVER['REMOTE_ADDR'] . '</strong></p>';

            echo $html;
        }
    ?>
</body>
</html>