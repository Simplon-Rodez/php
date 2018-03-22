<?php

/**
* Créer une fonction qui compte le nombre de caractere dans une chaine
* 
* ne pas utiliser la fonction strlen
*/

function countString($string)
{
    $count = 0;

    while($string[$count]) {
        $count++;
    }
    
    return $count;
}

echo countString('RPOKPOZKPOK');
