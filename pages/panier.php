<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-produit.php");
require_once("../database/db-client.php");
require_once("../database/db-acheter.php");
require_once("../fonction/fonction.php");

$pseudo = null;
$idClient = null;
if (isset($_SESSION["utilisateur"])) {
    $pseudo = $_SESSION["utilisateur"]["pseudo_client"];
    $idClient = $_SESSION["utilisateur"]["id_client"];
}

$paniers = [];
$total = 0;
if ($idClient) {
    $paniers = getPanierFromId($idClient);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pâtisserie | Eyce's Croissant</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
</head>
<body>
<?php include_once("../menu/menu.php") ?>
<section>
    <h1 class="text-center my-5">Votre Panier</h1>
    <div class="container text-center mb-3 mt-5">
        <div class="container text-center mb-5">
            <div class="row">
                <div class="col">
                    Produit
                </div>
                <div class="col">
                    Quantité
                </div>
                <div class="col">
                    Prix
                </div>
                <div class="col">
                    Action
                </div>
            </div>
        </div>

        <div class="container text-center">
            <?php foreach ($paniers as $panier): ?>
                <?php
                $produit = getProduitFromId($panier["id_produit"]);
                // Ajoutez des vérifications pour éviter les erreurs
                if (!empty($produit) && isset($produit[0]["designation"]) && isset($produit[0]["prix"])) {
                    $nomProduit = $produit[0]["designation"];
                    $prix = $produit[0]["prix"];
                    $prixUnitaire = $produit[0]["prix"];
                    $prixTotalProduit = $prixUnitaire * $panier["quantite"];
                    $total += $prixTotalProduit;
                } else {
                    $nomProduit = "Produit inconnu";
                    $prix = "Prix inconnu";
                }
                ?>
                <div class="row mb-3">
                    <div class="col">
                        <?= $nomProduit ?>
                    </div>
                    <div class="col">
                        <?= $panier["quantite"] ?>
                    </div>
                    <div class="col">
                        <?= $prix ?>
                    </div>
                    <div class="col">
                        <div class="d-inline-flex">
                            <p>
                                <a class="btn btn-lg btn-outline-primary fs-6"
                                   href="../pages/modifier-produit.php?id_produit=<?= $panier["id_produit"] ?>"><i
                                            class="bi bi-pen"></i></a>
                            </p>
                            <form method="POST" action="supprimer-produit.php" style="display:inline;">
                                <input type="hidden" name="id_produit" value="<?= $panier['id_produit'] ?>">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="container text-center mt-5">
            <h3>Total: <?= $total ?> €</h3>
        </div>
    </div>
    <div class="my-5 text-center">
        <button class="mx-auto btn btn-primary" href="../pages/commander.php">
            Commander
        </button>
    </div>
</section>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
