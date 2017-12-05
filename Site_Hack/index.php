<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="HACKATHON 16 - 19 FÉVRIER" />
    <meta property="og:type" content="SiteWeb" />
    <meta property="og:url" content="??" />
    <meta property="og:image" content="assets/imgs/opengraph.png" />
    <title>HACKATHON 16-18 Fevrier 2018</title>
    <link rel="icon" type="image/png" href="assets/imgs/invaders.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.pagepiling.css" media="screen and (min-width: 1025px)" />
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/responsive.css">

    <!-- TYPOGRAPHIE -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>

<body class="container-fluid">
    <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
        <div class="navbar-toggler animate">
            <span class="menu-icon glyphicon glyphicon-menu-hamburger"></span>
        </div>
        <ul class="navbar-menu animate">
            <li>
                <a href="#page1" class="animate">
                    <span class="desc animate">Accueil</span>
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li>
                <a href="#page2" class="animate">
                    <span class="desc animate">Qui propos</span>
                    <span class="glyphicon glyphicon-off">
					</span>
                </a>
            </li>
            <li>
                <a href="#page3" class="animate">
                    <span class="desc animate">Agenda</span>
                    <span class="glyphicon glyphicon-calendar"></span>
                </a>
            </li>
            <li>
                <a href="#page4" class="animate">
                    <span class="desc animate">Contact - Carte</span>
                    <span class="glyphicon glyphicon-envelope"></span>
                </a>
            </li>
            <li>
                <a href="#page5" class="animate">
                    <span class="desc animate">Partenaires</span>
                    <span class="glyphicon glyphicon-bookmark"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div id="pagepiling">
        <div class="section" id="section1">
            <div class="logotype-header">
                <div>
                    <img src="assets/imgs/EPITA_LOGO_DEF.png" alt="" id="epita">
                    <img src="assets/imgs/logo-codeacademie.svg" alt="" id="code-academie">
                </div>
            </div>
            <h1>hackathon</h1>
            <h2 id="text"></h2>
         <!--  ============================= -->
         <!--  A DÉCOMMENTER POUR ACTIVER !! -->
         <!--  ============================= -->
         <!--   
               <button type="button"><a href="#inscription" class="js-scrollTo">Inscription</a></button>
                <button type="button"><a href="#page4">Inscription</a></button>
         -->
            <h3 id="count">
                <span id="day"></span>
                <span id="hour"></span>
                <span id="minutes"></span>
                <span id="secondes"></span>
            </h3>
        </div>
        <div class="section" id="section2">
            <section>
                <div class="row">
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/game-controller.svg" alt=""> Présentation </h3>
                        <div id="orange"></div>
                        <p>Bienvenue à la seconde édition de ce Hackathon qui vous est proposé par <a href="http://code-academie.fr/" target="_blank">la Code Académie</a> et <a href="http://www.epita.fr/">l'EPITA</a>. Rejoignez-nous le temps d'un week-end pour exploiter les données de l'e-sport : innovons et concevons des applications à loisir ! C'est un challenge multi-compétences qui fait la part belle au travail d'équipe, à la communication et à la créativité... Sans oublier une bonne dose de technique pour donner vie à vos projets. Le meilleur projet aura droit à une distinction et un cadeau mystère... A vos ordis, prêt ? Inscrivez-vous !</p>
                        <h3><img src="assets/imgs/001-square-button.svg" alt=""> Un Hackathon ? C'est quoi ? </h3>
                        <div id="pink"></div>
                        <p>Le mot Hackathon est la combinaison de deux notions : hack et marathon. Un hack, en dépit de sa connotation négative initiale, est désormais le fait de détourner un objet/principe de son utilisation basique pour nous faciliter la vie (d'ailleurs on vous recommande fortement de faire un petit tour sur youtube et de chercher des <a href="https://www.youtube.com/watch?v=567Hkus_MVs" target="_blank">life hack</a>... ça pourrait vous changer la vie dans certaines occasions!). Dans notre cadre, ce sont les données de l'e-sport à hacker pour en tirer applications peut-être? Vous n'êtes pas limité.e.s dans la finalité de vos applications. La deuxième notion derrière le hackathon est le marathon. Vous allez devoir coder/designer/échanger/créer et surtout vous éclater pendant 48h non-stop! (sisi, vous avez le droit de dormir quand même). Le but est que vous fournissiez le projet le plus abouti dans un laps de temps très court et que vous le présentiez à un jury et devant les autres participant.e.s.</p>
                        <h3><img src="assets/imgs/002-cross-button.svg" alt=""> Et qui gère tout ça ? </h3>
                        <div id="blue"></div>
                        <p><a href="http://code-academie.fr/" target="_blank">La Code Académie</a> et <a href="http://www.epita.fr/">l'EPITA</a> s'occupent de l'aspect logistique et de la communication sur l'événement. </p>
                        <p>
                            Nous sommes deux centres de formation qui avons pour but de former nos élèves aux technologies et techniques professionnelles IT. Notre objectif : permettre à nos apprenant.e.s de se confronter au monde professionnel,développer les passerelles entre écoles, mais aussi et surtout pour qu'ils se fassent connaître sur le bassin rennais.</p>
                    </article>
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt=""> Qui/Comment participer ?</h3>
                        <div id="green"></div>
                        <p>Ce challenge s'adresse à des étudiants de première et deuxième année, tou.te.s ceux.celles qui souhaitent travailler en équipe sur l'élaboration d'un nouveau concept à partir de données réelles. Découvrez l'univers des start-up ou partagez votre expérience pendant cet événement. Vous pouvez même pérenniser votre projet suite à ce week-end ou lui donner vie uniquement le temps de ces deux jours... Libre à vous d'en décider! Tous les profils sont les bienvenus. Inscrivez-vous au sein du fomulaire ci-dessous ou envoyez-nous un email à <a href="mailto:codeacademie@fondationface.org">codeacademie@fondationface.org</a> et nous vous ferons un retour (n'oubliez pas votre nom, prénom et domaine d'activité). Le public pourra venir à l'inauguration du projet ou à la cérémonie de remise des prix.</p>
                        <h3><img src="assets/imgs/004-circle-button.svg" alt=""> public </h3>
                        <div id="red"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo fuga sit recusandae? Cupiditate vero autem, consequatur optio temporibus quam dolor. Minima, laudantium incidunt eius optio placeat sint consequatur? Nihil, tempore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aperiam incidunt fuga eius pariatur architecto facilis asperiores harum ullam repellendus maxime vitae accusamus voluptates illo, eos, iste dolor. Cumque, debitis.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zg46755sSdk" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <div class="section" id="section3">
            <section>
                <div class="row">
                    <article class="col-md-4">
                        <img src="assets/imgs/lorem-ipsum1.jpg" alt="" class="img-calendar">
                        <h3><img src="assets/imgs/001-square-button.svg" alt=""> Vendredi 16 Février</h3>
                        <div id="pink"></div>
                        <h4><img src="assets/imgs/invaders.svg" alt="">17:00</h4>
                        <p>Ouverture du Hackathon</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">18:00</h4>
                        <p>Définition des groupes</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">21:00</h4>
                        <p>Repas</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">22:00</h4>
                        <p>Bilan de la journée</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">23:00</h4>
                        <p>Fermeture des locaux</p>
                    </article>
                    <article class="col-md-4">
                        <img src="assets/imgs/lorem-ipsum1.jpg" alt="" class="img-calendar">
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt=""> Samedi 17 Février</h3>

                        <div id="green"></div>
                        <h4><img src="assets/imgs/invaders.svg" alt="">09:00</h4>
                        <p>Ouverture des locaux</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">09:15</h4>
                        <p>Petit déjeuner</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">21:00</h4>
                        <p>Bilan de la journée</p>
                    </article>
                    <article class="col-md-4">
                        <img src="assets/imgs/lorem-ipsum1.jpg" alt="" class="img-calendar">
                        <h3><img src="assets/imgs/004-circle-button.svg" alt=""> Dimanche 18 Février</h3>
                        <div id="red"></div>
                        <h4><img src="assets/imgs/invaders.svg" alt="">09:15</h4>
                        <p>Petit déjeuner</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">13:30</h4>
                        <p>Présentation du projet au jury</p>
                        <h4><img src="assets/imgs/invaders.svg" alt="">15:00</h4>
                        <p>Fermeture des locaux</p>
                    </article>
                </div>
            </section>
        </div>
        <div class="section" id="section4">
            <section id="inscription">
                <div class="row">
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/001-square-button.svg" alt=""> formulaire d'inscription</h3>
                        <div id="pink"></div>
                    <!--  ============================= -->
                    <!--  A RETIRER POUR ACTIVER !! -->
                    <!--  ============================= -->
                        <h1>Les inscriptions ne sont pas encores ouvertes.</h1>
                    <!--  ============================= -->
                    <!--  A DÉCOMMENTER POUR ACTIVER !! -->
                    <!--  ============================= -->
                    <!--    <form name="inscription" method="POST" action="validation.php">
                            <label for="name">Nom</label>
                            <input type="text" name="name" value="" required>
                            <label for="firstname">Prénom</label>
                            <input type="text" name="firstname" value="" required>
                            <label for="Mail">Email</label>
                            <input type="email" name="mail" value="" required/>
                            <label for="Ecole">École</label>
                            <select name="école">
                                <option value="Ecole 1">Code Académie</option>
                                <option value="Ecole 2"><h5>Digital Campus</h5></option>
                                <option value="Ecole 3">École Digital de la Nouvelle Chance</option>
                                <option value="Ecole 4">Epita</option>
                            </select>
                            <label for="Commentaire">Commentaire</label>
                            <textarea type="text" name="sujet" value="" cols="40" rows="10" maxlength="200"></textarea>
                            <button type="submit" name="envoyer" value="Envoyer">Envoyer</button>
                        </form>-->
                    </article>
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt=""> Lieu de matchmaking</h3>
                        <div id="green"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.9101187507667!2d-1.691041700000001!3d48.10357770000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edfd3c61bdc0b%3A0x233abe41efa1abc9!2sEPITA+Rennes!5e0!3m2!1sfr!2sfr!4v1511795691748" width="90%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <p>ADRESSE Lorem ipsum dolor &#8226; Lorem ipsum dolor &#8226; Lorem ipsum dolor &#8226;</p>
                    </article>
                </div>
            </section>

        </div>
        <div class="section" id="section5">
            <section>
                <div class="row">
                    <article class="col-md-12">
                        <h3><img src="assets/imgs/001-square-button.svg" alt=""> Nos Partenaires</h3>
                        <div id="pink"></div>
                        <img src="assets/imgs/logos/logo_face_white.svg" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/logo-codeacademie.svg" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/EPITA_LOGO_DEF.png" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/digital_campus.png" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/Logo_Mediaveille.svg" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/logo-sabella.jpg" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/TP%20logo%20white.svg" alt="" class="logo-partenaire">
                        <img src="assets/imgs/logos/claranet.png" alt="" class="logo-partenaire">
                    </article>
                    <article class="col-md-6">
                    </article>
                </div>
            </section>
        </div>
    </div>

    <!-- SCRIPT -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>