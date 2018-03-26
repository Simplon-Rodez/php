<?php
/**
* Completez ce code source pour que le script affiche
*
*   $chaine comporte plus de 10 caractères
*   OU
*   $chaine comporte moins de 10 caractères
*   OU
*   $chaine comporte exactement 10 caractères
*
*/
$chaine = $_GET['chaine'];

if(!isset($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/formation/PHP/exercices/conditions/exercice2.php?chaine=ceci est un test</strong>");
}

/*
* Completez le code ici
*/
$lgt_chaine = strlen($chaine);


if ($lgt_chaine > 10) {
    echo $chaine . ' comporte plus de 10 caractères';
} elseif ($lgt_chaine < 10) {
    echo $chaine . ' comporte moins de 10 caractères';
} else {
    echo $chaine . ' comporte exactement 10 caractères';
}
