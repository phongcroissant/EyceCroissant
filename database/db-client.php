<?php
require_once("db-config.php");
require_once("../fonction/fonction.php");

function createAccount($nom, $prenom, $pseudo, $email, $adresse, $codePostal, $villeAdresse, $password): void
{
    $pdo = getConnexion();
    $prenom = transformerPrenom($prenom);
    $nom = strtoupper($nom);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $requete = $pdo->prepare("INSERT INTO client (nom_client,prenom_client,lib_adresse,code_postal,ville_adresse,mail,pseudo,password) 
VALUES (?,?,?,?,?,?,?,?)");
    $requete->bindParam(1, $nom);
    $requete->bindParam(2, $prenom);
    $requete->bindParam(3, $adresse);
    $requete->bindParam(4, $codePostal);
    $requete->bindParam(5, $villeAdresse);
    $requete->bindParam(6, $email);
    $requete->bindParam(7, $pseudo);
    $requete->bindParam(8, $password);

    $requete->execute();
}