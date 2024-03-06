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
    <style>
        section {
            padding: 60px 0;
        }
    </style>
    <title>Eyce's Croissant</title>
</head>
<body>
<!--    Barre de navigation-->
<header>
    <nav class="navbar navbar-expand-lg bg-danger-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="me-2" src="assets/img/2490819.png" height="75" width="75"/>
                Eyce's Croissant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse collapse navbar-collapse me-auto mb-2 justify-content-end"
                 id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#patisserie">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#equipe">Notre équipe</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#avis">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <!--Présentation-->
    <section id="presentation">
        <div class="container me-auto mb-2 justify-content-end">
            <div class="row container text-center">
                <div class="col col-md-6">
                    <h1 class="p-2 mb-3">Eyce's Croissant</h1>
                    <h3 class="mb-3">Pense différemment, pense croissant</h3>
                    <p>Nous faisons les meilleurs croissants du monde, certifié par Marie Blachère, notre concurrent
                        n°1</p>
                    <a href="#" class="btn btn-outline-danger">Commander Maintenant</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="./assets/img/logo sans fond.png" height="500" width="500"/>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-danger-subtle" id="patisserie">
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

    <section id="equipe" class=" mt-5 ">
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/photo Phong.jpg" height="315" width="210"/></div>
                <div class="col-md-6">
                    <h1>Phong Nguyen</h1>
                    <h2>Fondateur</h2>
                    <p>Fondateur de Eyce's Croissant, la meilleure boulangerie du monde</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/photo Léo.jpg" height="315" width="210"/></div>
                <div class="col-md-6">
                    <h1>Léo Mougin</h1>
                    <h2>Co-fondateur</h2>
                    <p>Conçoit les meilleures pâtisseries de France depuis 1998</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/MARKIEWICZ_Benjamin.jpg" height="315" width="210"/></div>
                <div class="col-md-6">
                    <h1>Benjamin Markiewicz</h1>
                    <h2>Pâtissier Polonais</h2>
                    <p>Conçoit les meilleures pâtisseries de Pologne depuis 1998 quand il est présent </p>
                    <p>(Prends beaucoup de RTT)</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/photo Maxime.jpg" height="315" width="210"/></div>
                <div class="col-md-6">
                    <h1>Maxime Sermet</h1>
                    <h2>Pâtissier</h2>
                    <p>Conçoit les meilleures viennoiseries de France depuis 1998</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/photo Andy.jpg" height="315" width="210"/></div>
                <div class="col-md-6">
                    <h1>Andy Schiesslé</h1>
                    <h2>Livreur</h2>
                    <p>Plus rapide qu'une Formule 1, vous serez livrés en temps et en heure</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/photo Antoine.jpg" height="300" width="210"/>
                </div>
                <div class="col-md-6">
                    <h1>Antoine Néret</h1>
                    <h2>Caissier</h2>
                    <p>Maîtrise l'art des chiffres par excellence</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <h1>Hugo Talbot</h1>
                    <h2>Chocolatier</h2>
                    <p>Encore mieux que Cédric Grolet/Doumbé</p>
                    <button class="btn btn-outline-dark">Fiche de poste</button>
                </div>
            </div>
        </div>
    </section>

    <section id="avis" class="bg-danger-subtle">
        <h1 class="text-center"><i class="bi bi-stars"></i>Avis</h1>
        <p class="text-center">Ce que pensent nos clients de Eyce's Croissant...</p>
        <ul class="container list-group">
            <li class="list-group-item m-0 border-black">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <h2>L'une des meilleures boulangeries que j'ai pu essayer de ma vie</h2>
                <p class="fs-5">Je suggère cette boulangerie, elle en vaut le détour !</p>
                <p class="fs-6">Avis de Khang Nguyen le 31/01/2024</p>
            </li>
            <li class="list-group-item border-black">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <h2>Qualité incroyable ! A essayer !</h2>
                <p class="fs-5">A ma grande suprise, tout était bon, le fondant chocolat du beignet était délicieux</p>
                <p class="fs-6">Avis de Jorel Masgonty le 31/01/2023</p>
            </li>
            </li>
            <li class="list-group-item border-black">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <h2>Un top 3 de mes boulangeries préférées, et surement pas le 3e</h2>
                <p class="fs-5">Malgré mes exigences, cette boulangerie a su m'épater !</p>
                <p class="fs-6">Avis de Adrien Bruyère le 31/01/2022</p>
            </li>
            </li>
            <li class="list-group-item border-black">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <h2>Cette boulangerie vaut son titre</h2>
                <p class="fs-5">J'ai toujours été satisfait par cette boulangerie. Tout ce qui est vendu est toujours
                    très bon avec la possibilité de prendre un café à emporter. Tous les personnels que j'ai pu voir ont
                    toujours été très souriants jusqu'à ce jour.</p>
                <p class="fs-6">Avis de Clément Da Silva le 31/01/2021</p>
            </li>
            </li>
            <li class="list-group-item border-black">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <h2>Irréprochable</h2>
                <p class="fs-5">Boulangerie et pâtisseries délicieuses ... N'hésitez pas à visiter les lieux et obtenez
                    de délicieuses pâtisseries pour le petit déjeuner et du bon pain pour le dîner</p>
                <p class="fs-6">Avis de Teha Valette le 31/01/2024</p>
            </li>
            </li>
        </ul>
    </section>

    <section id="contact">
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
    <?php include_once("./menu/pied-page.php") ?>
</main>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>