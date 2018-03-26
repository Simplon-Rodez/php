<?php

/**
* Afficher les entiers du tableau $data
*/

$datas = [4,3.2,'thomas','formation',5,3.14,8];

echo '<h1>Nombre entier d\'un tableau</h1>';

foreach ($datas as $data) {
    if(is_int($data)) {
        echo $data . '<br>';
    }
}