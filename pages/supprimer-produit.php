<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-acheter.php");
require_once("../fonction/fonction.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_produit'])) {
    $idProduit = $_POST['id_produit'];

    if (isset($_SESSION["utilisateur"])) {
        $idClient = $_SESSION["utilisateur"]["id_client"];
        // Supprimer le produit du panier
        supprimerProduitDuPanier($idClient, $idProduit);
    }
}

// Rediriger vers la page du panier
header('Location: panier.php');
exit;