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

$pseudo = null;
$idClient = null;
if (isset($_SESSION["utilisateur"])) {
    $pseudo = $_SESSION["utilisateur"]["pseudo_client"];
    $idClient = $_SESSION["utilisateur"]["id_client"];
}
$resultats = getProduit($idProduit);

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $quantite = $_POST['quantite'];

    // Validation des données
    if (empty($quantite)) {
        $erreurs["quantite"] = "Veuillez saisir une quantité";
    }


    // Traiter les données
    if (empty($erreurs)) {
        addPanier($idProduit, $idClient, date("Y-m-d"), $quantite);
        // Rediriger l'utisateur vers une autre page du site
        header("Location: ../index.php");
        exit();
    }
}
foreach ($resultats as $resultat) {
    $nomProduit = $resultat["designation"];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <title>Ajouter au panier</title>
</head>
<body>
<?php //require_once "../menu/menu.php" ?>
<?php if ($resultats != null) : ?>
    <div class="container justify-content-center">
        <h1 class="text-center mt-5">Ajouter au panier !</h1>
        <h3 class="text-center mt-5"><?= $nomProduit ?></h3>
    </div>
    <form action="" method="post" class=" mx-auto w-50 p-5" novalidate>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité *</label>
            <input type="number"
                   class="form-control <?= (isset($erreurs["quantite"])) ? "border border-2 border-danger" : "" ?>"
                   name="quantite"
                   min="1"
                   id="quantite"
                   value="<?= $quantite ?>"
                   placeholder="Saisir une quantité">
            <?php if (isset($erreurs["quantite"])): ?>
                <p class="form-text text-danger"><?= $erreurs["quantite"] ?></p>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
<?php else: ?>
    <h1 class="mt-5 p-5 container bg bg-danger text-center">Le produit n'existe pas !</h1>
<?php endif; ?>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>