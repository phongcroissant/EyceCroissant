<?php
require_once("db-config.php");

function getViennoiserie(): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * 
FROM produit 
WHERE type_produit = 'Viennoiserie'
");
    $requete->execute();

    return $requete->FetchAll();
}

function getPatisserie(): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * 
FROM produit 
WHERE type_produit = 'Patisserie'
");
    $requete->execute();

    return $requete->FetchAll();
}

function getBaguette(): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * 
FROM produit 
WHERE type_produit = 'Baguette'
");
    $requete->execute();

    return $requete->FetchAll();
}

function getProduit($idProduit): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT * FROM produit WHERE id_produit=$idProduit");
    return $requete->FetchAll(PDO::FETCH_ASSOC);

}