<?php

/**
* Créer des classes Dog et et Cat étendant Pet et implémentant l'interface Animal
* 
* Methode de Animal : 
*   - Cry() // Affiche le nom du crie de l'animal
*   - Run() // Affiche la vitesse a laquelle l'animal court
* Propriété de Animal :
*    - $speed
*    - $cryName
* 
* Methode de Pet
*   - Sleep() // Affiche le temps d'une sieste d'un animal
* Proprieté de Pet
*   - SleepTime
*
* Il faut passer les paramètres $sleepTime, $speed, $cryName dans le constructeur
* 
* 
* Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
* Parcourir le tableau et afficher soit le crie, la vitesse ou son temps de sieste.
*/
interface Animal
{
    public function cry();
    public function run();
}

class Pet
{
    protected $_speed;
    protected $_sleepTime;

    public function __construct($sleepTime,$speed)
    {
        $this->sleepTime =$sleepTime;
        $this->_speed = $speed;
    }
    
    public function sleep() {
        return $this->sleepTime;
    }
    public function run()
    {
        return $this->_speed;
    }
    public function cry()
    {
        return self::CRY ;
    }
}

class Dog extends Pet implements Animal
{
    const CRY = 'aboie';
}

class Cat extends Pet implements Animal
{
    const CRY = 'miaule';

}


$rantanplan = new Dog('22 heures', 'fast');
$snoopy = new Dog('20 heures', 'low');

$garfield = new Cat('36 heures', 'low');
$qwerty = new Cat('5 heures', 'fast');
$minou = new Cat('8 heures', 'middle');

$animals = [$rantanplan,$snoopy,$garfield,$qwerty,$minou];

foreach ($animals as $key => $animal) {
    $action = '';
    switch ($key%3) {
        case 0 : $action = $animal->run(); break;
        case 1 : $action = $animal->cry(); break;
        case 2 : $action = $animal->sleep(); break;
    }

    if ($key) {
        echo ', ';
    }

    echo 'Animal ' . $key . ' : ' . $action;
}