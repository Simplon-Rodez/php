<?php

/**
* Afficher le nombre de 1 à 10 avec :
* for
* do
* while
*/
?>

<h1>Les boucles en PHP</h1>
<h2>La boucle for</h2>
<p><?php
for($i=1; $i<=10; $i++) {
    echo $i . ' ';
}
?></p>

<h2>La boucle do</h2>
<p><?php
$j=1;
do {
    echo $j . ' ';
    $j++;
} while ($j<=10);
?></p>

<h2>La boucle while</h2>
<p><?php
$k=1;
while($k<=10) {
    echo $k . ' ';
    $k++;
}
?></p>