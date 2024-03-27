<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        section {
            padding: 60px 0;
        }
    </style>
    <title>Eyce's Croissant</title>
</head>
<body>
<?php include_once("./menu/menu.php") ?>
<main>
    <!--Présentation-->
    <section id="presentation">
        <div class="container me-auto mb-2 justify-content-end">
            <div class="row container text-center">
                <div class="col col-md-6 my-auto">
                    <h1 class="p-2 mb-3">Eyce's Croissant</h1>
                    <h3 class="mb-3">Pense différemment, pense croissant</h3>
                    <p>Nous faisons les meilleurs croissants du monde, certifié par Marie Blachère, notre concurrent
                        n°1</p>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="./assets/img/logo sans fond.png" height="500" width="500"/>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-subtle" id="patisserie">
        <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
            </div>
            <div class="carousel-inner container">
                <div class="carousel-item container">
                    <img src="./assets/img/baguette.jpg" height=100% width=100% alt="">
                    <div class="container">
                        <div class="carousel-caption text-start">

                            <p><a class="btn btn-lg btn-light" href="./pages/baguette.php">Nos baguettes</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active container w-100">
                    <img src="assets/img/viennoiseries.jpg" height=100% width=100%/>
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a class="btn btn-lg btn-light" href="./pages/viennoiserie.php">Nos viennoiseries</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/patisseries.jpg" height=100% width=100% alt="">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <p><a class="btn btn-lg btn-light" href="./pages/patisserie.php">Nos pâtisseries</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</main>
<?php include_once("./menu/pied-page.php") ?>
</body>
</html>