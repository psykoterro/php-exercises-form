<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 11:28
 */
echo '<!DOCTYPE html>
<html>
    <head>
        <title>Exercice Formulaire</title>
    </head>
    <body>';
if (isset($_POST["civilite"]) && $_POST["nom"] && $_POST["prenom"]){
    $civilite = htmlspecialchars($_POST["civilite"]);
    if ($civilite == "mr" || $civilite == "mme"){
        $civiliteok = $civilite;
    }else{
        $erreur = "Probleme Civilité";
    }
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    if (!$erreur) {
        echo $civiliteok . " " . $nom . " " . $prenom." ".$_FILES['fichier']['name'];
    }else{
        echo $erreur;
    }
}else {
    echo '<form method="post" action="index.php" enctype="multipart/form-data">
                <select name="civilite">
                    <option value="mr">Mr</option>
                    <option value="mme">Mme</option>
                </select>
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <input type="file" name="fichier" placeholder="Votre fichier">
                <button type="submit">Envoyer</button>
            </form>';
}
echo '</body>
</html>';