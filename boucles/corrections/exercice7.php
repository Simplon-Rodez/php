<?PHP
/**
* Afficher les multiples de 5 de 0 a 100 sans faire de multiplication
* Le faire avec for
* Le faire avec while
*
*
*/
?>
<h1>Les multiples de 5 de 0 à 100</h1>

<h2>Avec la boucle for</h2>
<?php
for ($i=0;$i<=100;$i++) {
    if ($i%5 == 0) {
        echo $i . ' ';
    }
}
?>

<h2>Avec la boucle while</h2>
<?php 
$j = 0;
while ($j<=100) {
    if ($j%5 == 0) {
        echo $j . ' ';
    }
    $j++;
}
?>