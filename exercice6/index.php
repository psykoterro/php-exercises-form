<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 10:50
 */
echo '<!DOCTYPE html>
<html>
    <head>
        <title>Exercice Formulaire</title>
    </head>
    <body>';
        if (isset($_GET["civilite"]) && $_GET["nom"] && $_GET["prenom"]){
            $civilite = htmlspecialchars($_GET["civilite"]);
            if ($civilite == "mr" || $civilite == "mme"){
                $civiliteok = $civilite;
            }else{
                $erreur = "Probleme Civilité";
            }
            $nom = htmlspecialchars($_GET["nom"]);
            $prenom = htmlspecialchars($_GET["prenom"]);
            if (!$erreur) {
                echo $civilite . " " . $nom . " " . $prenom;
            }else{
                echo $erreur;
            }
        }else {
            echo '<form method="get" action="index.php">
                <select name="civilite">
                    <option value="mr">Mr</option>
                    <option value="mme">Mme</option>
                </select>
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <button type="submit">Envoyer</button>
            </form>';
        }
    echo '</body>
</html>';