<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Eyce's Croissant</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
</head>
<body>
<?php include_once("../menu/menu.php") ?>
<section class="pt-5 pb-5">
    <h1 class="text-center mb-4">Contactez-nous !</h1>
    <p class="text-center mb-4 fs-2">Vous avez une question ? Remplissez ce formulaire...</p>
    <form class="container w-50 mx-auto">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre email: </label>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="ex: AntoineLaTaupe@gmail.com">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre prénom: </label>
            <div class="input-group flex-nowrap ">
                <span class="input-group-text" id="addon-wrapping2"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="ex: Antoine" aria-label="Username"
                       aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quel est le thème de votre question?</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping3"><i class="bi bi-chat-left-dots"></i></span>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Contenu de la question</option>
                    <option value="1">Qualité</option>
                    <option value="2">Suggestion</option>
                    <option value="3">Allergène</option>
                </select>
            </div>
        </div>


        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Votre question..."></textarea>
        </div>
        <button type="submit" class="btn btn-outline-danger">Envoyer</button>
    </form>
</section>
<?php include_once("../menu/pied-page.php") ?>
</body>
</html>
