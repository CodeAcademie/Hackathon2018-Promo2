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
                    <img src="assets/imgs/logo-codeacademie.svg" alt="La Code Academie" id="code-academie">
                    <img src="assets/imgs/EPITA_LOGO_DEF.png" alt="School Epita" id="epita">
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
                        <h3><img src="assets/imgs/game-controller.svg" alt="pictogram Game"> Presentation </h3>
                        <div class="orange"></div>
                        <p>Bienvenue à la seconde édition de ce Hackathon qui vous est proposé par <a href="http://code-academie.fr/" target="_blank">la Code Académie</a> et <a href="http://www.epita.fr/">l'EPITA</a>. Rejoignez-nous le temps d'un week-end pour exploiter les données de l'e-sport : innovons et concevons des applications à loisir ! C'est un challenge multi-compétences qui fait la part belle au travail d'équipe, à la communication et à la créativité... Sans oublier une bonne dose de technique pour donner vie à vos projets. Le meilleur projet aura droit à une distinction et un cadeau mystère... A vos ordis, prêt ? Inscrivez-vous !</p>
                        <h3><img src="assets/imgs/001-square-button.svg" alt="Square Button"> Un Hackathon ? C'est quoi ? </h3>
                        <div class="orange"></div>
                        <p>Le mot Hackathon est la combinaison de deux notions : hack et marathon. Un hack, en dépit de sa connotation négative initiale, est désormais le fait de détourner un objet/principe de son utilisation basique pour nous faciliter la vie (d'ailleurs on vous recommande fortement de faire un petit tour sur youtube et de chercher des <a href="https://www.youtube.com/watch?v=567Hkus_MVs" target="_blank">life hack</a>... ça pourrait vous changer la vie dans certaines occasions!). Dans notre cadre, ce sont les données de l'e-sport à hacker pour en tirer applications peut-être? Vous n'êtes pas limité.e.s dans la finalité de vos applications. La deuxième notion derrière le hackathon est le marathon. Vous allez devoir coder/designer/échanger/créer et surtout vous éclater pendant 48h non-stop! (sisi, vous avez le droit de dormir quand même). Le but est que vous fournissiez le projet le plus abouti dans un laps de temps très court et que vous le présentiez à un jury et devant les autres participant.e.s.</p>
                        <h3><img src="assets/imgs/002-cross-button.svg" alt="Cross Button"> Et qui gere tout ça ? </h3>
                        <div class="orange"></div>
                        <p><a href="http://code-academie.fr/" target="_blank">La Code Académie</a> et <a href="http://www.epita.fr/">l'EPITA</a> s'occupent de l'aspect logistique et de la communication sur l'événement. </p>
                        <p>
                            Nous sommes deux centres de formation qui avons pour but de former nos élèves aux technologies et techniques professionnelles IT. Notre objectif : permettre à nos apprenant.e.s de se confronter au monde professionnel,développer les passerelles entre écoles, mais aussi et surtout pour qu'ils se fassent connaître sur le bassin rennais.</p>
                    </article>
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt="Triangle Button"> Qui et Comment participer ?</h3>
                        <div class="orange"></div>
                        <p>Ce challenge s'adresse à des étudiants de première et deuxième année, tou.te.s ceux.celles qui souhaitent travailler en équipe sur l'élaboration d'un nouveau concept à partir de données réelles. Découvrez l'univers des start-up ou partagez votre expérience pendant cet événement. Vous pouvez même pérenniser votre projet suite à ce week-end ou lui donner vie uniquement le temps de ces deux jours... Libre à vous d'en décider! Tous les profils sont les bienvenus. Inscrivez-vous au sein du fomulaire ci-dessous ou envoyez-nous un email à <a href="mailto:codeacademie@fondationface.org">codeacademie@fondationface.org</a> et nous vous ferons un retour (n'oubliez pas votre nom, prénom et domaine d'activité). Le public pourra venir à l'inauguration du projet ou à la cérémonie de remise des prix.</p>
                        <h3><img src="assets/imgs/004-circle-button.svg" alt="Circle Button"> public </h3>
                        <div class="orange"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo fuga sit recusandae? Cupiditate vero autem, consequatur optio temporibus quam dolor. Minima, laudantium incidunt eius optio placeat sint consequatur? Nihil, tempore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aperiam incidunt fuga eius pariatur architecto facilis asperiores harum ullam repellendus maxime vitae accusamus voluptates illo, eos, iste dolor. Cumque, debitis.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PF4bsRzwQZU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <div class="section" id="section3">
            <section>
                <div class="row">
                     <article class="col-md-4">
                        <img src="assets/imgs/lorem-ipsum1.jpg" alt="alt-?" class="img-calendar">
                        <h3><img src="assets/imgs/004-circle-button.svg" alt="Circle Button"> Voter pour vos thèmes !</h3>
                        <div class="orange"></div>
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc8pKQatOejthE8gc_SBsae8eXGMBRSXncwmoIWpGkfvriSJQ/viewform?embedded=true" width="100%" height="325" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
                        <ul class="timeline">
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                        </ul>
                    </article>
                    <article class="col-md-4">
                        <h3><img src="assets/imgs/001-square-button.svg" alt="Square Button"> Vendredi 16 Fevrier</h3>
                        <div class="orange"></div>
                        <ul class="timeline">
                            <li>
                                <img src="assets/imgs/invaders/invaders1.svg" alt="Space Invaders">
                                <h4>17:00 &#45; Ouverture du Hackathon</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders2.svg" alt="Space Invaders">
                                <h4>18:00 &#45; Définition des groupes</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders3.svg" alt="Space Invaders">
                                <h4>21:00 &#45; Repas</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>22:00 &#45; Bilan de la journée</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>23:00 &#45; Fermeture des locaux</h4>
                            </li>
                        </ul>
                           <h3><img src="assets/imgs/001-square-button.svg" alt="Square Button"> Vendredi 16 Fevrier</h3>
                        <div class="orange"></div>
                        <ul class="timeline">
                            <li>
                                <img src="assets/imgs/invaders/invaders9.svg" alt="Space Invaders">
                                <h4>09:15 &#45; Petit déjeuner</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders10.svg" alt="Space Invaders">
                                <h4>13:30 &#45; Présentation du projet au jury</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders11.svg" alt="Space Invaders">
                                <h4>15:00 &#45; Fermeture des locaux</h4>
                            </li>
                        </ul>
                    </article>
                    <article class="col-md-4">
                        <img src="assets/imgs/lorem-ipsum1.jpg" alt="" class="img-calendar">
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt="Triangle Button"> Samedi 17 Fevrier</h3>
                        <div class="orange"></div>
                        <ul class="timeline">
                            <li>
                                <img src="assets/imgs/invaders/invaders6.svg" alt="Space Invaders">
                                <h4>09:00 &#45; Ouverture des locaux</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders7.svg" alt="Space Invaders">
                                <h4>09:15 &#45; Petit déjeuner</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders4.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders5.svg" alt="Space Invaders">
                                <h4>?:? &#45; Lorem Ipsum</h4>
                            </li>
                            <li>
                                <img src="assets/imgs/invaders/invaders8.svg" alt="Space Invaders">
                                <h4>21:00 &#45; Bilan de la journée</h4>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
        <div class="section" id="section4">
            <section id="inscription">
                <div class="row">
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/001-square-button.svg" alt="Square Button"> formulaire d'inscription</h3>
                        <div class="orange"></div>
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
                        <h3><img src="assets/imgs/003-triangle-button.svg" alt="Triangle Button"> Lieu de matchmaking</h3>
                        <div class="orange"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.9101187507667!2d-1.691041700000001!3d48.10357770000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edfd3c61bdc0b%3A0x233abe41efa1abc9!2sEPITA+Rennes!5e0!3m2!1sfr!2sfr!4v1511795691748" width="90%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <p>Code Academie &#8226; Epita &#8226; Digital Campus &#8226; École Digital de la Nouvelle Chance</p>
                        <p>19-22 Boulevard Saint-Conwoïon</p>
                        <p>35000 Rennes</p>
                        <p>Tél : 02 57 22 08 11 </p>
                    </article>
                </div>
            </section>

        </div>
        <div class="section" id="section5">
            <section>
                <div class="row">
                    <article class="col-md-6">
                        <h3><img src="assets/imgs/001-square-button.svg" alt="Square Button"> Nos Partenaires</h3>
                        <div class="orange"></div>
                        <img src="assets/imgs/logos/logo_face_white.svg" alt="FACE RENNES" class="logo-partenaire">
                        <img src="assets/imgs/logos/logo-codeacademie.svg" alt="CODE ACADEMIE" class="logo-partenaire">
                        <img src="assets/imgs/logos/EPITA_LOGO_DEF.png" alt="EPITA" class="logo-partenaire">
                        <img src="assets/imgs/logos/digital_campus.png" alt="DIGITAL CAMPUS" class="logo-partenaire">
                        <img src="assets/imgs/logos/Logo_Mediaveille.svg" alt="MEDIAVEILLE" class="logo-partenaire">
                        <img src="assets/imgs/logos/logo-sabella.jpg" alt="SABELLA" class="logo-partenaire">
                        <img src="assets/imgs/logos/claranet.png" alt="Claranet" class="logo-partenaire">
                    </article>
                    <article class="col-md-6">
                    </article>
                </div>
            </section>
            <footer>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Mentions légales</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Mentions légales</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Editeur du site</h2>
                                <p>Association FACE Rennes : 23 rue d’Aiguillon, 35200 Rennes</p>
                                <p>E-mail : codeacademie@fondationface.org</p>
                                <p>Site Web : www.face.bzh</p>
                                <p>Siret : 42894713900047</p>
                                <p>Tel : 02.99.86.89.26</p>
                                <p>Directeur de publication : Erwann DUCLOS</p>

                                <h2>Hébergement :</h2>
                                <p>OVH</p>
                                <p>2 rue Kellermann</p>
                                <p>BP 80157</p>
                                <p>59053 ROUBAIX Cedex 1</p>
                                <p>Tél : +33 (0)8 203 203 63</p>
                                <p>mail : support@ovh.com</p>

                                <h2>Indisponibilité du site</h2>
                                <p>la code académie s’engage à faire ses meilleurs efforts pour assurer aux utilisateurs une accessibilité du site à tout moment. La code académie ne pourra être tenue pour responsable, en cas d’indisponibilité du site, pour quelque cause que ce soit.</p>
                                
                                <h2>Images</h2>
                                <p>Pixabay et Flirck</p>
                                <h2>Pictogrammes</h2>
                                <p>Flaticons</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Copyright &#9679; Code Academie</p>
            </footer>
        </div>
    </div>

    <!-- SCRIPT -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>