<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num est pair OU $num est impair
*
*   Vous n'avez pas le droit d'utiliser la fonction if, il faut utiliser
*   la fonction switch.
* 
* 
*   Rappel: l'operateur permettant de connaitre le reste d'une division est %
*/
$num = $_GET['num'];
if(!isset($num)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/formation/PHP/exercices/conditions/exercice5.php?num=4</strong>");
}




/*
* Completez le code ici
*/
if (is_int($num) && $num > 0) {
	switch ($num % 2) {
		case 0 :
			echo $num . ' est un nombre pair';
			break;
		case 1 :
			echo $num . ' est un nombre impair';
			break;
	}
} else {
	echo $num . ' n\'est pas un entier positif';
}
