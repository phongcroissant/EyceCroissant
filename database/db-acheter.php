<?php
function addPanier(int $idProduit, int $idClient, $date, int $quantite)
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("INSERT INTO acheter (id_produit,id_client,date_commande,quantite) VALUES (?,?,?,?)");

    $requete->bindParam(1, $idProduit);
    $requete->bindParam(2, $idClient);
    $requete->bindParam(3, $date);
    $requete->bindParam(4, $quantite);
    $requete->execute();
}

function getPanierFromId($idClient): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * FROM acheter WHERE id_client = $idClient");
    $requete->execute();
    $panier = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $panier;
}

function getProduitFromId($idProduit): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT designation,prix FROM produit WHERE id_produit LIKE $idProduit");
    $requete->execute();
    $comptes = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $comptes;
}

function supprimerProduitDuPanier($idClient, $idProduit)
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("DELETE FROM acheter WHERE id_client = $idClient AND id_produit = $idProduit");
    $requete->execute();
}

function modifierQuantiteProduit($idProduit, int $idClient, int $quantite)
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("UPDATE acheter SET quantite=$quantite WHERE id_produit=$idProduit AND id_client=$idClient");
    $requete->execute();
}

function archiverCommande(int $idProduit, int $idClient, $date, int $quantite)
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("INSERT INTO archive VALUES($idProduit,$idClient,$date,$quantite)");
    $requete->execute();
}