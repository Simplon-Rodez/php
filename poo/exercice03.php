<?php
/**
 * @brief PHP POO exercice 3.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : rendre une classe plus flexible avec des méthodes magiques.
 *
 * Mots clés : méthodes magiques, __get, __set
 *
 */

/*
 * Exercice : ajoutez un getter et un setter à la classe Actor et ajoutez
 * une propriété birthDate à un des acteurs. Affichez la date dans la
 * fonction fullName quand une valeur est présente.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Actor
{
    private $_firstName;
    private $_lastName;

    private $extraData = array();

    public function __set($name, $val)
    {
        $this->extraData[$name] = $val;
    }

    public function __construct($_firstName, $_lastName)
    {
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
    }

    public function fullName()
    {
        echo "<p>".$this->_firstName." ".$this->_lastName."</p>";
    }
}

$actors[] = new Actor('John', 'Gielgud');
$actors[] = new Actor('Laurence', 'Olivier');
$actors[] = new Actor('Vivien', 'Leigh');

echo "<h1>Actors List</h1>";

foreach ($actors as $actor) {
    $actor->fullName();
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>

