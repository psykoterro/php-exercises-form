<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 11:26
 */
echo '<!DOCTYPE html>
<html>
    <head>
        <title>Exercice Formulaire</title>
    </head>
    <body>
        <form method="get" action="index.php">
            <select name="civilite">
                <option value="mr">Mr</option>
                <option value="mme">Mme</option>
            </select>
            <input type="text" name="nom" placeholder="nom">
            <input type="text" name="prenom" placeholder="prenom">
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>';