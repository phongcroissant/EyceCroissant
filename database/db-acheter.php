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