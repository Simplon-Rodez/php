<?php

/**
* Afficher le nombre pair de 1 à 20 avec :
* for
* do
* while
*/
?>
<h1>Les nombres pairs de 1 à 20 avec</h1>
<h2>La boucle for</h2>
<p><?php
for($i=1; $i<=20; $i++) {
    if ($i%2 == 0) {
        echo $i . ' ';
    }
}
?></p>

<h2>La boucle do</h2>
<p><?php
$j=1;
do {
    if ($j%2 == 0) {
        echo $j . ' ';
    }
    $j++;
} while ($j<=20);
?></p>

<h2>La boucle while</h2>
<p><?php
$k=1;
while($k<=20) {
    if ($k%2 == 0) {
        echo $k . ' ';
    }
    $k++;
}
?></p>