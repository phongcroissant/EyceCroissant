<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-produit.php");
require_once("../database/db-client.php");
require_once("../database/db-acheter.php");
require_once("../fonction/fonction.php");
$idProduit = null;
if (isset($_GET["id_produit"])) {
    $idProduit = $_GET["id_produit"];
}
if (isset($_SESSION["utilisateur"])) {
    $idClient = $_SESSION["utilisateur"]["id_client"];
    $pseudo = $_SESSION["utilisateur"]["pseudo_client"];
}
$produits = getProduit($idProduit);
foreach ($produits as $produit) {
    $nom = $produit["designation"];
}
$date = date("Y-m-d");
$quantite = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $quantite = $_POST['quantite'];

    // Validation des données
    if (empty($quantite)) {
        $erreurs["note"] = "Veuillez saisir une quantité";
    }
    if ($quantite < 0) {
        $erreurs["quantite"] = "Veuillez saisir une quantité !";
    }


    // Traiter les données
    if (empty($erreurs)) {
        addPanier($idProduit, $idClient, $date, $quantite);
        // Rediriger l'utisateur vers une autre page du site
        header("location:../index.php");
        exit();
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter au panier</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
</head>
<body>
<h1 class="text-center my-5">Ajouter <?= $nom ?> au panier</h1>
<form action="" class=" mx-auto w-50 p-5">
    <div class="mb-3">
        <label for="quantite" class="form-label">Quantité *</label>
        <input type="number"
               class="form-control <?= (isset($erreurs["quantite"])) ? "border border-2 border-danger" : "" ?>"
               name="quantite"
               min="1"
               id="quantite"
               value="1"
               placeholder="Saisir votre note entre 0 et 5">
        <?php if (isset($erreurs["quantite"])): ?>
            <p class="form-text text-danger"><?= $erreurs["quantite"] ?></p>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
</body>
</html>
