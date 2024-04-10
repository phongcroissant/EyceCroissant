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
    <title>Notre équipe | Eyce's Croissant</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
</head>
<body>
<?php include_once("../menu/menu.php") ?>
<section class="pt-5">
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo Phong.jpg" height="315" width="210"/></div>
            <div class="col-md-6 my-auto">
                <h1>Phong Nguyen</h1>
                <h2>Fondateur</h2>
                <p>Fondateur de Eyce's Croissant, la meilleure boulangerie du monde</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20NGUYEN%20Phong.pdf"
                      target="_blank">Fiche de poste</a></p>
            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo Léo.jpg" height="315" width="210"/></div>
            <div class="col-md-6 my-auto">
                <h1>Léo Mougin</h1>
                <h2>Co-fondateur</h2>
                <p>Conçoit les meilleures pâtisseries de France depuis 1998</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20MOUGIN%20Léo.pdf"
                      target="_blank">Fiche de poste</a></p>
            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/MARKIEWICZ_Benjamin.jpg" height="315" width="210"/></div>
            <div class="col-md-6 my-auto">
                <h1>Benjamin Markiewicz</h1>
                <h2>Pâtissier Polonais</h2>
                <p>Conçoit les meilleures pâtisseries de Pologne depuis 1998 quand il est présent </p>
                <p>(Prend beaucoup de RTT)</p>
                <p><a class="btn btn-outline-dark"
                      href="../assets/pdf/Fiche%20de%20poste%20MARKIEWICZ%20Benjamin.pdf" target="_blank">Fiche de
                        poste</a></p>
            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo Maxime.jpg" height="315" width="210"/></div>
            <div class="col-md-6 my-auto">
                <h1>Maxime Sermet</h1>
                <h2>Pâtissier</h2>
                <p>Conçoit les meilleures viennoiseries de France depuis 1998</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20SERTMET%20Maxime.pdf"
                      target="_blank">Fiche de poste</a></p>

            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo Andy.jpg" height="315" width="210"/></div>
            <div class="col-md-6 my-auto">
                <h1>Andy Schiesslé</h1>
                <h2>Livreur</h2>
                <p>Plus rapide qu'une Formule 1, vous serez livrés en temps et en heure</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20SCHIESSLE%20Andy.pdf"
                      target="_blank">Fiche de poste</a></p>

            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo Antoine.jpg" height="300" width="210"/>
            </div>
            <div class="col-md-6 my-auto">
                <h1>Antoine Néret</h1>
                <h2>Caissier</h2>
                <p>Maîtrise l'art des chiffres par excellence</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20NERET%20Antoine.pdf"
                      target="_blank">Fiche de poste</a></p>

            </div>
        </div>
    </div>
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/photo%20Hugo.JPG" height="300" width="210" alt="">
            </div>
            <div class="col-md-6 my-auto">
                <h1>Hugo Talbot</h1>
                <h2>Chocolatier</h2>
                <p>Encore mieux que Cédric Grolet/Doumbé</p>
                <p><a class="btn btn-outline-dark" href="../assets/pdf/Fiche%20de%20poste%20TALBOT%20Hugo.pdf"
                      target="_blank">Fiche de poste</a></p>

            </div>
        </div>
    </div>
    <div class="container mx-auto w-50 col-md-block">
        <img src="../assets/img/Organigramme-removebg-preview.png" height="600" width="700" alt="">
    </div>
</section>
<?php include_once("../menu/pied-page.php") ?>
</body>
</html>
