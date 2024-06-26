<?php
require_once("../database/db-client.php");
session_start();
// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$prenom = "";
$nom = "";
$pseudo = "";
$adresse = "";
$codePostal = "";
$villeAdresse = "";
$email = "";
$password = "";
$confirmPassword = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['codepostal'];
    $villeAdresse = $_POST['villeadresse'];
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    // Validation des données
    if (empty($prenom)) {
        $erreurs["prenom"] = "Veuillez entrer un prénom";
    }
    if (empty($nom)) {
        $erreurs["nom"] = "Veuillez entrer un nom";
    }
    if (empty($pseudo)) {
        $erreurs["pseudo"] = "Veuillez saisir un pseudo";
    }
    if (empty($email)) {
        $erreurs["email"] = "Veuillez entrer une adresse mail";
    }
    if (empty($adresse)) {
        $erreurs["adresse"] = "Veuillez entrer une adresse";
    }
    if (empty($codePostal)) {
        $erreurs["codepostal"] = "Veuillez entrer un code postal";
    }
    if (strlen($codePostal) != 5) {
        $erreurs["codepostal"] = "Veuillez entrer un code postal valide";
    }
    if (empty($villeAdresse)) {
        $erreurs["villeadresse"] = "Veuillez entrer une ville";
    }
    if (empty($password)) {
        $erreurs["password"] = "Veuillez entrer un mot de passe";
    }
    if (!estSolide($password)) {
        $erreurs["password"] = "Votre mot de passe doit contenir entre 8 et 14 caratères, doit posséder au moins 1 majuscule, 1 minuscule et 1 chiffre";
    }
    if ($password != $confirmPassword) {
        $erreurs["confirmpassword"] = "Veuillez saisir le même mot de passe";
    }
    if (verifierSiMailExiste($email)) {
        $erreurs["email"] = "Cette adresse email a déjà été utilisée";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs["email"] = "Veuillez entrer une adresse mail valide";
    }

    // Traiter les données
    if (empty($erreurs)) {
        // Traitement des données (insertion dans une base de données)
        createAccount($nom, $prenom, $pseudo, $email, $adresse, $codePostal, $villeAdresse, $password);
        // Rediriger l'utisateur vers une autre page du site
        header("Location: ../index.php");
        exit();
    }
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
    <div class="container">
        <div class="container justify-content-center">
            <h1 class="text-center mt-5">Inscription</h1>
        </div>
        <form action="" method="post" class=" mx-auto w-50 p-5 shadow mb-5" novalidate>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom *</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs["nom"])) ? "border border-2 border-danger" : "" ?>"
                       name="nom"
                       id="nom"
                       value="<?= $nom ?>"
                       placeholder="Taupe">
                <?php if (isset($erreurs["nom"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["nom"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom *</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs["prenom"])) ? "border border-2 border-danger" : "" ?>"
                       name="prenom"
                       id="prenom"
                       value="<?= $prenom ?>"
                       placeholder="Antoine">
                <?php if (isset($erreurs["prenom"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["prenom"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="pseudo" class="form-label">Pseudo *</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs["pseudo"])) ? "border border-2 border-danger" : "" ?>"
                       name="pseudo"
                       id="pseudo"
                       value="<?= $pseudo ?>"
                       placeholder="Antoine">
                <?php if (isset($erreurs["pseudo"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["pseudo"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email *</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs["email"])) ? "border border-2 border-danger" : "" ?>"
                       name="email"
                       id="Email"
                       value="<?= $email ?>"
                       placeholder="AntoineLaTaupe@gmail.com">
                <?php if (isset($erreurs["email"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["email"] ?></p>
                <?php endif; ?>
                <div id="emailHelp" class="form-text">Nous ne divulguerons jamais votre adresse email</div>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse *</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs["adresse"])) ? "border border-2 border-danger" : "" ?>"
                       name="adresse"
                       id="adresse"
                       value="<?= $adresse ?>"
                       placeholder="5 avenue du parc">
                <?php if (isset($erreurs["adresse"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["adresse"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="codepostal" class="form-label">Code postal *</label>
                <input type="number"
                       class="form-control <?= (isset($erreurs["codepostal"])) ? "border border-2 border-danger" : "" ?>"
                       name="codepostal"
                       id="codepostal"
                       max="99999"
                       value="<?= $codePostal ?>"
                       placeholder="25000">
                <?php if (isset($erreurs["codepostal"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["codepostal"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="villeadresse" class="form-label">Ville *</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs["villeadresse"])) ? "border border-2 border-danger" : "" ?>"
                       name="villeadresse"
                       id="villeadresse"
                       value="<?= $villeAdresse ?>"
                       placeholder="Besançon">
                <?php if (isset($erreurs["villeadresse"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["villeadresse"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe *</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs["password"])) ? "border border-2 border-danger" : "" ?>"
                       name="password"
                       id="password"
                       value="<?= $password ?>"
                       placeholder="Password">
                <?php if (isset($erreurs["password"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["password"] ?></p>
                <?php else: ?>
                    <div id="emailHelp" class="form-text">Votre mot de passe doit contenir entre 8 et 14 caratères, doit
                        posséder au moins 1 majuscule, 1 minuscule et 1 chiffre
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">Confirmation mot de passe *</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs["confirmpassword"])) ? "border border-2 border-danger" : "" ?>"
                       name="confirmpassword"
                       id="confirmpassword"
                       value="<?= $confirmPassword ?>"
                       placeholder="Confirmer votre mot de passe">
                <?php if (isset($erreurs["confirmpassword"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["confirmpassword"] ?></p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="connexion.php" class="nav-item mb-2 nav-link p-0 mt-3 mx-auto">Vous avez déjà un compte ?
                Connectez-vous !</a>
        </form>
    </div>
</section>
<?php include_once("../menu/pied-page.php") ?>
</body>
</html>

