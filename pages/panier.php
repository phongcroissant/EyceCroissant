<?php
session_start();
require_once("../database/db-config.php");
require_once("../database/db-produit.php");
$commandes = [];
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
    </div>
</section>
<div class="fixed-bottom">
    <?php include_once("../menu/pied-page.php") ?>
</div>

</body>
</html>
