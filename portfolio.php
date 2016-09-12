<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php
    include ('header.php');
    ?>
</head>

<body itemscope itemtype="http://schema.org/CreativeWork">

<!-- Wrapper-->
<div id="wrapper">

    <!-- Nav -->
    <nav id="nav">
        <a href="aProposDeMoi.php" class="icon fa-home"></a>
        <a href="cv.php" class="icon fa-file-o"></a>
        <a href="portfolio.php" class="icon fa-folder active"></a>
        <a href="contact.php" class="icon fa-envelope"></a>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Work -->
        <article id="work" class="panel">
            <header>
                <h2 itemprop="name" class="text-center">Mes réalisations:</h2>
            </header>
            <p>Voici une présentation des projets réalisés:</p>
            <section>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="images/Site-village/index.html" class="image fit"><img src="images/mon village bootstrap.PNG" alt="Projet Bootstrap mon village"></a>
                            <figcaption itemprop="description">Projet mon village avec Bootstrap qui avait pour objectif de prendre en main le framework Bootstrap.</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="http://www.projetSaint-Didier.fr" class="image fit"><img src="images/accueil%20wpSaintDidier.PNG" alt="Projet Wordpress mon village"></a>
                            <figcaption itemprop="description">Projet mon village en Wordpress : Sur une configuration similaire au projet Mon village en Bootstrap, utilisation de Woordpress pour un premier projet de ce type</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="https://gestionnaire.herokuapp.com/" class="image fit"><img src="images/gestionnaire.PNG" alt="Projet Symfony2/Bootstrap"></a>
                            <figcaption itemprop="description">Projet gestionnaire de livres pour une prise en main de Symfony2</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="http://www.aureliebonet.fr/aProposDeMoi.php" class="image fit"><img src="images/accueilSitePerso.PNG" alt="Projet Symfony2/Bootstrap/JQuery"></a>
                            <figcaption itemprop="description">Site personnel en HTML5/CSS3, Bootstrap ainsi que PHP pour l'envoi de mail lors de la validation du formulaire</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="http://www.sensabloc.fr" class="image fit"><img src="images/sensabloc.PNG" alt="Projet Sensabloc"></a>
                            <figcaption itemprop="description">Site Sensabloc réalisé bénévolement pour une association avec le CMS Wordpress  </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="http://nalo-oc-projet6.herokuapp.com/" class="image fit"><img src="images/accueilNAO.PNG" alt="Projet Nos Amis les Oiseaux"></a>
                            <figcaption itemprop="description">Projet Nos amis les oiseaux en Symfony3 : projet en groupe, poste d'intégratrice et chef de projet</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="https://projet-louvre.herokuapp.com/" class="image fit"><img src="images/accueilLouvre.PNG" alt="Projet Billetterie du Louvre"></a>
                            <figcaption itemprop="description">Projet Billetterie du Louvre en Symfony2 : Système de réservation en ligne de son billet avec paiement de celui-ci</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure><a itemprop="url" href="https://github.com/bonetaurelie/projetMultilingua.git" class="image fit">Projet Multilingua Framework IONIC</a>
                            <figcaption itemprop="description">Projet pour permettre de recevoir des cours de langues étrangères et des notifications de sessions</figcaption>
                        </figure>
                    </div>
                </div>
            </section>
        </article>
    </div>


        <!-- footer -->
        <?php
        include ('footer.php');
        ?>
</div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>
</html>
