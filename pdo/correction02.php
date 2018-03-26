<?php
/**
 * @file	correction02.php
 * @author	Hans Vanpee <hvanpee.ext@simplon.co>
 * @brief	Créez un form pour saisir une nouvelle commande
 *
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = "ecommerce";
$password = "ecommerce";

try {
    $db = new PDO("mysql:dbname=ecommerce;host=localhost;charset=utf8mb4", $user, $password);
} catch (PDOException $e) {
    die("<p>Database connection failed</p>");
}
if (count($_GET) > 0) {
    enregistrer();
} else {
    formulaire();
}

function enregistrer()
{
    global $db;

    try {
        $stmt = $db->prepare('INSERT INTO commandes (`date`, `idClient`) values (:date, :idClient)');
        if ($stmt->execute($_GET)) {
            echo "<p>Nouvelle commande enregistrée</p>";
        } else {
            echo "<p>La commande n'a pas été enregistrée : {$db->errorCode()}</p>";
        }
    } catch (PDOException $e) {
        echo "<p>Erreur de base de données : {$e->getMessage()}</p>";
    } catch (Exception $e) {
        echo "<p>Erreur : {$e->getMessage()}</p>";
    }
}

function formulaire()
{
    global $db;

    echo "<h3>Nouvelle commande</h3>";

    $form = <<<HTML
		<form action="" method="GET">
			<fieldset>
				<label>Date</label>
				<input type="text" name="date"><br>
				<label>Client</label>
                <select name="idClient">
HTML;
    $query = $db->query("SELECT * FROM clients");
    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $form .= "<option value=\"{$row['id']}\">{$row['nom']}</option>";
    };
    $form .= <<<HTML
                </select>
            </fieldset>
            <input type="submit" value="Enregistrer">
        </form>
HTML;
    echo $form;
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
