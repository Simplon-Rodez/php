<?php

/**
* Créer une fonction qui verifie qu'une variable existe dans $_POST, $_GET ou $_SESSION
* 
*/
session_start();

$_POST['post'] = true;
$_GET['get'] = true;
$_COOKIE['cookie'] = true;
$_SESSION['session'] = true;

function isInSuperGlobal ($var) 
{
    $is_in = 'nothing';

    if (!empty($_POST[$var])) {
        $is_in = 'POST';
    }

    if (!empty($_GET[$var])) {
        $is_in = 'GET';
    }

    if (!empty($_COOKIE[$var])) {
        $is_in = 'COOKIE';
    }

    if (!empty($_SESSION[$var])) {
        $is_in = 'SESSION';
    }


    return $var . ' est dans : ' . $is_in;
}

echo isInSuperGlobal('post') . '<br>';
echo isInSuperGlobal('get') . '<br>';
echo isInSuperGlobal('cookie') . '<br>';
echo isInSuperGlobal('session') . '<br>';
echo isInSuperGlobal('seifj') . '<br>';
