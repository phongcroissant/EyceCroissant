<?php
session_start();
require_once("../database/db-client.php");

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$email = "";
$password = "";
$identifiant = "";
$accounts = getAccount();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation des données
    if (empty($email)) {
        $erreurs["email"] = "Veuillez saisir une adresse mail";
    }
    if (empty($password)) {
        $erreurs["password"] = "Veuillez saisir un mot de passe";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs["email"] = "Veuillez saisir une adresse mail valide";
    }

    // Traiter les données
    if (empty($erreurs)) {
        $accountFound = false;
        foreach ($accounts as $account) {
            if ($account["mail"] == $email) {
                $accountFound = true;
                if (!password_verify($password, $account["password"])) {
                    $erreurs["identifiant"] = "L'email ou le mot de passe est incorrect";
                } else {
                    // Rediriger l'utilisateur vers la page d'accueil
                    $_SESSION["utilisateur"] = [
                        "pseudo_client" => $account["pseudo"],
                        "email" => $account["mail"],
                        "id_client" => $account["id_client"]
                    ];
                    header("Location: ../index.php");
                    exit();
                }
                break;
            }
        }
        if (!$accountFound) {
            $erreurs["identifiant"] = "L'email ou le mot de passe est incorrect";
        }
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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.united.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
</head>
<body>
<?php include_once("../menu/menu.php") ?>
<section>
    <div class="container">
        <div class="container justify-content-center">
            <h1 class="text-center mt-5">Connexion</h1>
        </div>
        <p class="text-center bg bg-danger w-25 mx-auto justify-content-center">
            <?php if (isset($erreurs["identifiant"])): ?>
                <?= $erreurs["identifiant"] ?>
            <?php endif; ?>
        </p>
        <form action="" method="post" class=" mx-auto w-50 p-5 shadow mb-5" novalidate>
            <div class="mb-3">
                <label for="Email" class="form-label">Email *</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs["email"])) ? "border border-2 border-danger" : "" ?>"
                       name="email"
                       id="Email"
                       value="<?= $email ?>"
                       placeholder="AntoineLaTaupe@gmail.com"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs["email"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["email"] ?></p>
                <?php endif; ?>
                <div id="emailHelp" class="form-text">Nous ne divulguerons jamais votre adresse email</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe *</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs["password"])) ? "border border-2 border-danger" : "" ?>"
                       name="password"
                       id="password"
                       value="<?= $password ?>"
                       placeholder="Password"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs["password"])): ?>
                    <p class="form-text text-danger"><?= $erreurs["password"] ?></p>
                <?php endif; ?>
            </div>


            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="inscription.php" class="nav-item mb-2 nav-link p-0 mt-3">Vous n'avez pas encore de compte ?
                Créez-en un !</a>
        </form>
    </div>
</section>
<?php include_once("../menu/pied-page.php") ?>
</body>
</html>

