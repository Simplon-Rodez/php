<?php
/**
 * @brief PHP POO exercice 4.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : comprendre et pratiquer l'héritage de classes.
 *
 * Mots clés : extends, héritage, protected.
 *
 */

/*
 * Exercice : renommez la classe Actor en Person et dérivez la classe Actor
 * de la classe Person. Ajoutez un attribut _oscars et un constructeur à la
 * classe Actor. Le constructeur initialize tous les attributs de la classe.
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

    public function __get($name)
    {
        if (isset($this->extraData[$name])) {
            return $this->extraData[$name];
        } else {
            trigger_error("Error: tried to access undefined property: $name");
        }
    }

    public function __construct($_firstName, $_lastName)
    {
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
    }

    public function fullName()
    {
        if (isset($this->extraData['birthDate'])) $birthDate = " " . $this->extraData['birthDate'];
        else $birthDate = "";
        echo "<p>".$this->_firstName." ".$this->_lastName."$birthDate</p>";
    }
}

$actors[] = new Actor('John', 'Gielgud');
$actors[] = new Actor('Laurence', 'Olivier');
$actors[] = new Actor('Vivien', 'Leigh');

$actors[0]->birthDate = '14/04/1904';

echo "<h1>Actors List</h1>";

foreach ($actors as $actor) {
    $actor->fullName();
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>

