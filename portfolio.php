<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=" Aurélie Bonet, portfolio, réalisations, développeuse, chef de projet, chef de projet multimédia, Vaucluse, Provence Alpes Côte d'Azur, PACA, développeur, concepteur, programmeur, conceptrice, programmeuse"/>
    <meta name="description" content="Vous trouverez ici les projets que j'ai réalisé depuis le début de ma formation."/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aurélie BONET - Mon portfolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/x-icon/faviconBis.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include ('menu.php');
?>

<div class="container">
    <div class="row">
        <div class="titre">
            <h1 class="text-center">Mes réalisations:</h1>
        </div>

        <ul>
            <li class="projet"><a href="images/Site village/index.html" target="_blank">Mon village Bootstrap</a></li>
            <li class="projet"><a href="http://www.projetSaint-Didier.fr" target="_blank">Mon village Wordpress</a></li>
            <li class="projet"><a href="#" target="_blank">Gestionnaire de livres Symfony2/Bootstrap</a></li>
            <li class="projet"><a href="#" target="_blank">Mon site personnel PHP/Bootstrap/JQuery</a></li>
            <li class="projet"><a href="http://www.sensabloc.fr" target="_blank">Site sensabloc Wordpress</a></li>
            <li class="projet"><a href="http://nalo-oc-projet6.herokuapp.com/" target="_blank">Site Nos Amis les Oiseaux (projet en groupe Symfony 3 / Poste d'intégratrice et de Chef de projet)</a></li>
            <li class="projet"><a href="https://projet-louvre.herokuapp.com/" target="_blank">Billetterie du Louvre Symfony 2</a></li>
            <li class="projet"><a href="https://github.com/bonetaurelie/projetMultilingua.git" target="_blank">Multilingua Framework IONIC</a></li>

        </ul>
    </div>


    <div class="row">
        <div id="portofolio" class="carousel slide" data-ride="carousel" class="center">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/mon village bootstrap.PNG" alt="Projet Bootstrap mon village">
                </div>

                <div class="item">
                    <img src="images/accueil%20wpSaintDidier.PNG" alt="Projet Wordpress mon village">
                </div>

                <div class="item">
                    <img src="images/gestionnaire.PNG" alt="Projet Symfony2/Bootstrap">
                </div>

                <div class="item">
                    <img src="images/site perso.PNG" alt="Projet Symfony2/Bootstrap/JQuery">
                </div>

                <div class="item">
                    <img src="images/sensabloc.PNG" alt="Projet Sensabloc">
                </div>

                <div class="item">
                    <img src="images/accueilNAO.PNG" alt="Projet Nos Amis les Oiseaux">
                </div>

                <div class="item">
                    <img src="images/accueilLouvre.PNG" alt="Projet Billetterie du Louvre">
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
