<?php

/**
* Creer un script qui affiche les tables de multiplications des nombres de 1 a 5
*/

?>
<h1>Les tables de multiplications</h1>

<?php
for($i=1;$i<=5;$i++) {
    echo '<h2>Table de multiplication de ' . $i . '</h2>';

    for($j=0;$j<=10;$j++) {
        echo $i . ' x ' . $j . ' = ' . $i*$j . '<br>';
    }
}