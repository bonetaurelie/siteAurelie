<?php
/* Si le formulaire est envoyé alors on fait les traitements */
if (isset($_POST['envoyer'])) {
    /* Récupération des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc()) {
        $nom = stripslashes(trim($_POST['nom']));
        $expediteur = stripslashes(trim($_POST['email']));
        $sujet = stripslashes(trim($_POST['sujet']));
        $message = stripslashes(trim($_POST['message']));
    } else {
        $nom = trim($_POST['nom']);
        $expediteur = trim($_POST['email']);
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
        || empty($expediteur)
        || empty($sujet)
        || empty($message)
    ) {
        header('location:contact.php?champ=1');

    } /* On vérifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $expediteur)) {
        header('location:contact.php?adresse=1');
        

    } /* On vérifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $expediteur)
        || preg_match($regex_head, $nom)
        || preg_match($regex_head, $sujet)
    ) {
        header('location:contact.php?entete=1');
    } /* Si aucun problème et aucun cookie créé, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent'])) {
        /* Destinataire (votre adresse e-mail) */
        $to = 'contact@aureliebonet.fr';

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
            header('location:contact.php?mail=1');
            
            /* On créé un cookie de courte durée (ici 120 secondes) pour éviter de
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 120);

            /* On détruit la variable $_POST */
            unset($_POST);
        } else {
            header('location:contact.php?erreur=1');
            echo 'Erreur d\'envoi de l\'e-mail';
        }

    } /* Cas où le cookie est créé et que la page est rafraichie, on détruit la variable $_POST */
    else {
        unset($_POST);
    }
}
?>