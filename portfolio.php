<!DOCTYPE html>
<html lang="fr">

<?php
include ('header.php');
?>

<body itemscope itemtype="http://schema.org/CreativeWork">

<?php
include ('menu.php');
?>

<div class="container">
    <div class="row">
        <div class="titre">
            <h1 itemprop="name" class="text-center">Mes réalisations:</h1>
        </div>

        <ul>
            <li class="projet"><a itemprop="url" href="images/Site-village/index.html" target="_blank">Mon village Bootstrap</a></li>
            <li class="projet"><a itemprop="url" href="http://www.projetSaint-Didier.fr" target="_blank">Mon village Wordpress</a></li>
            <li class="projet"><a itemprop="url" href="https://gestionnaire.herokuapp.com/" target="_blank">Gestionnaire de livres Symfony2/Bootstrap</a></li>
            <li class="projet"><a itemprop="url" href="http://www.aureliebonet.fr/aProposdeMoi.php" target="_blank">Mon site personnel PHP/Bootstrap/JQuery</a></li>
            <li class="projet"><a itemprop="url" href="http://www.sensabloc.fr" target="_blank">Site sensabloc Wordpress</a></li>
            <li class="projet"><a itemprop="url" href="http://nalo-oc-projet6.herokuapp.com/" target="_blank">Site Nos Amis les Oiseaux (projet en groupe Symfony 3 / Poste d'intégratrice et de Chef de projet)</a></li>
            <li class="projet"><a itemprop="url" href="https://projet-louvre.herokuapp.com/" target="_blank">Billetterie du Louvre Symfony 2</a></li>
            <li class="projet"><a itemprop="url" href="https://github.com/bonetaurelie/projetMultilingua.git" target="_blank">Multilingua Framework IONIC</a></li>

        </ul>
    </div>


    <div class="row">
        <div id="portofolio" class="carousel slide" data-ride="carousel" class="center">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img itemprop="image" src="images/mon village bootstrap.PNG" alt="Projet Bootstrap mon village">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/accueil%20wpSaintDidier.PNG" alt="Projet Wordpress mon village">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/gestionnaire.PNG" alt="Projet Symfony2/Bootstrap">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/CapturesitePerso.PNG" alt="Projet Symfony2/Bootstrap/JQuery">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/sensabloc.PNG" alt="Projet Sensabloc">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/accueilNAO.PNG" alt="Projet Nos Amis les Oiseaux">
                </div>

                <div class="item">
                    <img itemprop="image" src="images/accueilLouvre.PNG" alt="Projet Billetterie du Louvre">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#portofolio" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#portofolio" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#portofolio" data-slide-to="0" class="active"></li>
                <li data-target="#portofolio" data-slide-to="1"></li>
                <li data-target="#portofolio" data-slide-to="2"></li>
                <li data-target="#portofolio" data-slide-to="3"></li>
                <li data-target="#portofolio" data-slide-to="4"></li>
                <li data-target="#portofolio" data-slide-to="5"></li>
                <li data-target="#portofolio" data-slide-to="6"></li>
                <li data-target="#portofolio" data-slide-to="7"></li>
            </ol>
        </div>
    </div>
</div>


<?php
include ('footer.php');
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="script.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
