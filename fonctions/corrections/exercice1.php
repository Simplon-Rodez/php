<?php

/**
* Créer une fonction qui teste si une valeur existe dans un tableau
* 
* ne pas utiliser la fonction in_array
*/

function isInArray($array, $string)
{
    foreach ($array as $item) {
        if ($string == $item) {
            return true;
        }
    }

    return false;
}