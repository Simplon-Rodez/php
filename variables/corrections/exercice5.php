<?php
session_start();

/**
* Creer un formulaire qui demande le nom de l'utilisateur
* une fois envoyé
* afficher le nom et demander le prenom
* enfin afficher le nom ET le prénom après la validation 
*
* Indice : il faut utiliser les sessions
*/

$has_error = false;

if (isset($_POST['submit-lastname'])) {
    
    if (empty($_POST['last-name'])) {
        $has_error = true;
    } else {
        $_SESSION['last-name'] = $_POST['last-name'];
    }

}

if (isset($_POST['submit-firstname'])) {
    
    if (empty($_POST['first-name'])) {
        $has_error = true;
    } else {
        $_SESSION['first-name'] = $_POST['first-name'];
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
    <?php if (!isset($_SESSION['last-name'])) : ?>
        <h1>Comment vous appelez-vous ?</h1>
        <form method="post">
            <label for="last-name">Votre nom</label>
            <input type="text" id="last-name" name="last-name" placeholder="Doe">
            <input type="submit" value="valider" name="submit-lastname">
        </form>

    <?php elseif (!isset($_SESSION['first-name'])) : ?>
        <h1>Ok, votre nom est <?php echo $_SESSION['last-name']; ?></h1>
        <p>Mais quel est votre prénom ?</p>
        <form method="post">
            <label for="first-name">Votre prénom</label>
            <input type="text" id="first-name" name="first-name" placeholder="John">
            <input type="submit" value="valider" name="submit-firstname">
        </form>
    <?php else: ?>
        <h1>Vous vous appelez <?php echo $_SESSION['last-name'] . ' ' . $_SESSION['first-name']; ?></h1>
    <?php endif; ?>
</body>
</html>