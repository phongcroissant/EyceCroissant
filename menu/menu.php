<?php
$pseudo = null;
if (isset($_SESSION["utilisateur"])) {
    $pseudo = $_SESSION["utilisateur"]["pseudo_client"];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eyce's Croissant</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-danger-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                <img class="me-2" src="/assets/img/2490819.png" height="75" width="75" alt="Logo"/>
                Eyce's Croissant
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Accueil</a>
                    </li>
                    <?php if ($pseudo): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/equipe.php">Notre équipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/avis.php">Avis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/panier.php">0 <i class="bi bi-cart"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?= htmlspecialchars($pseudo, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/logout.php">Se déconnecter</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown dropdown-menu-end">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                Compte
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="../pages/inscription.php">Inscription</a></li>
                                <li><a class="dropdown-item" href="../pages/connexion.php">Connexion</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
