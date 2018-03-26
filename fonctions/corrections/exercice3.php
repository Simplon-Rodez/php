<?php

/**
* Créer une fonction qui verifie qu'une chaine existe dans une autre chaine et retourne
* la position de son premier caractere 
* 
* ne pas utiliser la fonction strpos
* 
* exemple 
* 
* $place = myfunction('mystring', 'string'); // 3
*/

function countPos ($string, $string_test)
{
    $pos = 0;
    $count_test = strlen($string_test);

    while($string[$pos]) {
        $str_test = '';

        for ($i=$pos;$i<$count_test+$pos;$i++) {
            $str_test .= $string[$i];
        }

        if($str_test == $string_test) {
            return "'{$string_test}' est dans  '{$string}', à la position {$pos}";
        }

        $pos ++;
    }

    return "'{$string_test}' n'est pas dans  '{$string}'";
}


echo countPos('tatatitsefoijfoseijfoij', 'tit');
