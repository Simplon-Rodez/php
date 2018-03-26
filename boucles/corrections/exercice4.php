<?php

/**
* Créer un script qui compte le nombre de voyelle
* dans la variable $sentence
*
* 
* indice on peut parcourir une chaine avec for
* strlen()
* in_array()
*/

$sentence = "La formation simplon c'est genial, on va devenir des pros";
$vowels = ['a','e','i','o','u', 'y'];
$nb_vowels = 0;

for ($i=0;$i<strlen($sentence);$i++) {
    if (in_array($sentence[$i], $vowels)) {
       $nb_vowels ++; 
    }
}
echo 'Il y a ' . $nb_vowels . ' voyelles dans la phrase : ' . $sentence;