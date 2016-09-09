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

<body>

<!-- Wrapper-->
<div id="wrapper">

    <!-- Nav -->
    <nav id="nav">
        <a href="aProposDeMoi.php" class="icon fa-home"></a>
        <a href="cv.php" class="icon fa-file-o"></a>
        <a href="portfolio.php" class="icon fa-folder"></a>
        <a href="contact.php" class="icon fa-envelope active"></a>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Contact -->
        <article id="contact" class="panel">
            <header>
                <h2 itemprop="name">Pour me contacter, merci de remplir le formulaire: </h2><br/>
            </header>

            <div class="row text-center col-lg-6 col-lg-push-4 col-md-6 col-md-push-4 col-sm-6 col-sm-push-4 col-xs-6 col-xs-push-3 ">
                <address>
                    <div itemscope itemtype="http://schema.org/Person">
                        <span itemprop="name"><strong>Aurélie BONET</strong><br></span>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
										<span itemprop="streetAddress">
											178 Bis le Cours<br>
										</span>
                            <span itemprop="postalCode">84210</span>
                            <span itemprop="addressLocality">SAINT-DIDIER</span>
                        </div>
                        <span itemprop="telephone">06.19.85.21.22</span><br/>
                        <a href="mailto:contact@aureliebonet.fr" itemprop="email">
                            contact@aureliebonet.fr</a>
                    </div>
                </address><br/>
            </div>

            <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" action="send.php" method="post">
                <div class="form-group">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom*" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email*" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Sujet*" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <textarea id="message" class="form-control" name="message" placeholder="Message*" cols="40" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-4 col-lg-offset-3 col-md-3 col-md-offset-4 col-sm-10 col-xs-10">
                        <input type="submit" class="form-control" name="envoyer" value="Envoyer" />
                    </div>
                </div>
            </form>
        </article>

        <?php
        if(isset($_GET['champ'])){?>
            <div class="message col-lg-9 col-md-9 col-sm-9 col-xs-11">
                <?php echo "Tous les champs doivent être renseignés";?>
            </div>
            <?php
        }
        ?>

        <?php
        if(isset($_GET['adresse'])){?>
            <div class="message col-lg-9 col-md-9 col-sm-9 col-xs-11">
                <?php echo "L'adresse n'est pas valide";?>
            </div>
            <?php
        }
        ?>

        <?php
        if(isset($_GET['entete'])){?>
            <div class="message col-lg-9 col-md-9 col-sm-9 col-xs-11">
                <?php  echo 'En-têtes interdites dans les champs du formulaire';?>
            </div>
            <?php
        }
        ?>

        <?php
        if(isset($_GET['mail'])){?>
            <div class="message col-lg-9 col-md-9 col-sm-9 col-xs-11">
                <?php  echo 'E-mail envoyé avec succès';?>
            </div>
            <?php
        }
        ?>

        <?php
        if(isset($_GET['erreur'])){?>
            <div class="message col-lg-9 col-md-9 col-sm-9 col-xs-11">
                <?php  echo 'Erreur d\'envoi de l\'e-mail';?>
            </div>
            <?php
        }
        ?>

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