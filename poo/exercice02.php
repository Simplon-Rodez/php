<?php
/**
 * @brief PHP POO exercice 2.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : encapsuler les détails d'implémentation dans une classe.
 *
 * Mots clés : visibilité, public, private, constructeur, destructeur.
 *
 */

/*
 * Exercice : modifiez la classe Actor et cachez les attributs _firstName
 * et _lastName, ajoutez un constructeur pour initialiser les objets de la
 * classe, améliorez la création du tableau actors.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * @brief Store actor details.
 */
class Actor
{
    public $_firstName;
    public $_lastName;

    /**
     * @brief output actor's full name in <p> tag.
     */
    function fullName()
    {
        echo "<p>".$this->_firstName." ".$this->_lastName."</p>";
    }
}

$actors = [];
$actors[] = new Actor;
$actors[0]->_firstName = 'John';
$actors[0]->_lastName = 'Gielgud';
$actors[] = new Actor;
$actors[1]->_firstName = 'Laurence';
$actors[1]->_lastName = 'Olivier';
$actors[] = new Actor;
$actors[2]->_firstName = 'Vivien';
$actors[2]->_lastName = 'Leigh';

echo "<h1>Actors List</h1>";

foreach ($actors as $actor) {
    $actor->fullName();
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>

