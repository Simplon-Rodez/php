<?php
/**
 * @file		correction01.php
 * @author	Hans Vanpee <hans@vanpee.fr>
 * @brief		Créez un form pour saisir une nouveau produit.
 *
 * Le formulaire affiche les inputs nécessaires pour créer un nouveau
 * produit dans la base de données de l'exercice e-commerce.
 * Lors du submit, les valeurs sont enregistrées dans la table
 * « Produits » et un message indique le succès ou l'échec de l'opération.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (count($_GET) > 0) {
	enregistrer();
} else {
	formulaire();
}

function enregistrer() {
    $user = "ecommerce";
    $password = "ecommerce";

	try {
		$db = new PDO("mysql:dbname=ecommerce;host=localhost", $user, $password);

		$stmt = $db->prepare('INSERT INTO produits (`nom`, `couleur`, `prix`,
			`stock`, `categorie`, `description`, `idVendeur`)
				VALUES(:nom, :couleur, :prix, :stock, :categorie, :description, :idVendeur)');
		if ($stmt->execute($_GET)) {
            echo "<p>Nouveau produit enregistré</p>";
        } else {
            echo "<p>Le produit n'a pas été enregistré : {$db->errorCode()}</p>";
        }
	} catch (PDOException $e) {
		echo "<p>Erreur de base de données : {$e->getMessage()}</p>";
    } catch (Exception $e) {
        echo "<p>Erreur : {$e->getMessage()}</p>";
    }
}

function formulaire() {
	echo <<<HTML
		<form action="" method="GET">
			<fieldset>
				<label>Nom</label>
				<input type="text" name="nom">
				<label>Couleur</label>
				<input type="text" name="couleur">
                <label>Prix</label>
                <input type="text" name="prix">
                <label>Stock</label>
                <input type="text" name="stock">
                <label>Catégorie</label>
                <input type="text" name="categorie">
                <label>Description</description>
                <input type="text" name="description">
                <label>ID Vendeur</label>
                <input type="text" name="idVendeur">
            </fieldset>
            <input type="submit" value="Enregistrer">
        </form>
HTML;
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:

