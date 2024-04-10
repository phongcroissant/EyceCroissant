<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-produit.php");
$produits = getViennoiserie();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Viennoiserie | Eyce's Croissant</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php include_once("../menu/menu.php") ?>
<body>
<section>
    <h1 class="text-center fw-bold mt-5 mb-5">Nos viennoiseries</h1>
    <div class="container text-center mb-3 mt-5">
        <div class="row">
            <?php foreach ($produits as $produit): ?>
                <div class="container text-center">
                    <div class="row mb-5">
                        <div class="col col-xl-6">
                            <img src="<?= $produit["photo"] ?>" alt="">
                        </div>
                        <div class="col col-xl-6 my-auto">
                            <h1 class="mb-3">
                                <?= $produit["designation"] ?>
                            </h1>
                            <h2 class="mb-3">
                                <?= $produit["sous_designation"] ?>
                            </h2>
                            <p class="mb-3">
                                <?= $produit["commentaire"] ?>
                            </p>
                            <p class="mb-3">
                                Prix : <?= $produit["prix"] ?> €
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</section>
<?php include_once("../menu/pied-page.php") ?>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>