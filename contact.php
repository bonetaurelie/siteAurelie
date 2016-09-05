<!DOCTYPE html>
<html lang="fr">

<?php
include ('header.php');
?>

<body  itemscope itemtype="http://schema.org/WebPage">

<?php
include ('menu.php');
?>

<div class="container">
    <div class="row">
        <div class="addresse">
            <h1 itemprop="name">Pour me contacter, merci de remplir le formulaire: </h1><br/>
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
                    <a href="mailto:jane-doe@xyz.edu" itemprop="email">
                        bonetaurelie@gmail.com</a>
                </div>
            </address>
        </div>
    </div>

    <div class="row">
        <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" action="" method="post">
            <div class="form-group">
                <label for="nom" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Votre nom :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="nom" name="nom" />
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Votre prénom :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="prenom" name="prenom" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Votre E-mail :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Votre téléphone :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="tel" name="tel" />
                </div>
            </div>
            <div class="form-group">
                <label for="sujet" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Objet du message :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="sujet" name="sujet" />
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Message :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <textarea id="message" class="form-control" name="message" cols="40" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
                    <input type="submit" class="form-control" name="envoyer" value="Envoyer" />
                </div>
            </div>
        </form>
    </div>

</div>

<?php
/* Si le formulaire est envoyé alors on fait les traitements */
if (isset($_POST['envoyer'])) {
    /* Récupération des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc()) {
        $nom = stripslashes(trim($_POST['nom']));
        $prenom = stripslashes(trim($_POST['prenom']));
        $expediteur = stripslashes(trim($_POST['email']));
        $tel = stripslashes(trim($_POST['tel']));
        $sujet = stripslashes(trim($_POST['sujet']));
        $message = stripslashes(trim($_POST['message']));
    } else {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $expediteur = trim($_POST['email']);
        $tel = trim($_POST['tel']);
        $sujet = trim($_POST['sujet']);
        $message = trim($_POST['message']);
    }

    /* Expression régulière permettant de vérifier si le
    * format d'une adresse e-mail est correct */
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';

    /* Expression régulière permettant de vérifier qu'aucun
    * en-tête n'est inséré dans nos champs */
    $regex_head = '/[\n\r]/';

    /* Si le formulaire n'est pas posté de notre site on renvoie
    * vers la page d'accueil */
    //if ($_SERVER['HTTP_REFERER'] != 'http://www.aureliebonet.fr/contact.php') {
    //    header('Location: http://www.aureliebonet.fr/');
    // } /* On vérifie que tous les champs sont remplis */
    if (empty($nom)
        || empty($prenom)
        || empty($expediteur)
        || empty($tel)
        || empty($sujet)
        || empty($message)
    ) {
        ?>
        <div class="message col-lg-4 col-md-4 col-sm-5 col-xs-7">
            <p><b>Tous les champs doivent être renseignés</b></p>
        </div>
<?php
    } /* On vérifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $expediteur)) {
        ?>
    <div class="message col-lg-4 col-md-4 col-sm-5 col-xs-7">
        <p><b>L'adresse n'est pas valide</b></p>
    </div>

    <?php
    } /* On vérifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $expediteur)
        || preg_match($regex_head, $nom)
        || preg_match($regex_head, $sujet)
    ) {
    ?>
    <div class="message col-lg-5 col-md-5 col-sm-6 col-xs-8">
        <p><b>En-têtes interdites dans les champs du formulaire</b></p>
    </div>

<?php
    } /* Si aucun problème et aucun cookie créé, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent'])) {
        /* Destinataire (votre adresse e-mail) */
        $to = 'bonetaurelie@gmail.com';

        /* Construction du message */
        $msg = 'Bonjour,' . "\r\n\r\n";
        $msg .= 'Ce mail a été envoyé depuis aureliebonet.fr par ' . $nom . ' ' . $prenom . "\r\n\r\n";
        $msg .= 'Voici le message qui vous est adressé :' . "\r\n";
        $msg .= '***************************' . "\r\n";
        $msg .= $message . "\r\n";
        $msg .= '***************************' . "\r\n";

        /* En-têtes de l'e-mail */
        $headers = 'From: ' . $nom . ' <' . $expediteur . '>' . "\r\n\r\n";

        /* Envoi de l'e-mail */
        if (mail($to, $sujet, $msg, $headers)) {
            ?>

        <div class="message col-lg-4 col-md-4 col-sm-5 col-xs-7">
            <p><b>E-mail envoyé avec succès</b></p>
        </div>

<?php
            /* On créé un cookie de courte durée (ici 120 secondes) pour éviter de
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 120);

            /* On détruit la variable $_POST */
            unset($_POST);
        } else {
            ?>

        <div class="message col-lg-4 col-md-4 col-sm-5 col-xs-7">
            <p><b>Erreur d'envoi de l'e-mail</b></p>
        </div>
<?php
        }

    } /* Cas où le cookie est créé et que la page est rafraichie, on détruit la variable $_POST */
    else {
        unset($_POST);
    }
}
?>



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
