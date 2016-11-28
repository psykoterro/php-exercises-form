<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 10:48
 */
if (isset($_POST["nom"]) && isset($_POST["prenom"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    echo "Nom: ".$nom." Prenom: ".$prenom;
}else{
    echo "Je n'ai pas reçu les infos Nom et Prenom !";
}