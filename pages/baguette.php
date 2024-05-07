<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-produit.php");
$produits = getBaguette();
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
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
</head>
<body>
<?php include_once("../menu/menu.php") ?>
<section>
    <div class="container text-center mb-3 mt-5">
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
