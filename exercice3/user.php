<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 10:44
 */
if (isset($_GET["nom"]) && isset($_GET["prenom"])){
    $nom = htmlspecialchars($_GET["nom"]);
    $prenom = htmlspecialchars($_GET["prenom"]);
    echo "Nom: ".$nom." Prenom: ".$prenom;
}else{
    echo "Je n'ai pas reçu les infos Nom et Prenom !";
}