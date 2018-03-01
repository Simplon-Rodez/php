<?php
/**
* Ajouter deux elements a la fin du tableau $number
* puis afficher le nombre d'élement du tableau ainsi que le 2 eme element.
* 
* Resultat:
* 
* Nombre d'élement : 6
* Deuxieme element : 2
* 
* http://php.net/manual/fr/ref.array.php
*/



$numbers = [1,2,3,4];

// Methode 1
array_push($numbers, 5);

// Méthode 2
$numbers[] = 6;

$lgt_numbers = count($numbers);

echo "Nombre d'élements : {$lgt_numbers}, deuxième élément : {$numbers[1]}";
?>
<pre><?php print_r($numbers); ?></pre>