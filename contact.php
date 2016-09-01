<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aurélie BONET</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
        <div class="addresse">
            <address>
                <strong>Aurélie BONET</strong><br>
                178 Bis le Cours<br>
                84210 SAINT-DIDIER<br>
                Tel: 06.19.85.21.22<br>
                mail: bonetaurelie@yahoo.fr
            </address>
        </div>
    </div>

    <div class="row">
        <div class="form col-md-offset-2 col-sm-offset-2 col-xs-offset-3 form-horizontal">
            <form action="send_email.php" method="post">
                <p>
                    <label for="nom">Votre nom :</label>
                    <input type="text" id="nom" name="nom" />
                </p>
                <p>
                    <label for="prenom">Votre prénom :</label>
                    <input type="text" id="prenom" name="prenom" />
                </p>
                <p>
                    <label for="email">Votre E-mail :</label>
                    <input type="text" id="email" name="email" />
                </p>
                <p>
                    <label for="tel">Votre téléphone :</label>
                    <input type="text" id="tel" name="tel" />
                </p>
                <p>
                    <label for="sujet">Objet du message :</label>
                    <input type="text" id="sujet" name="sujet" />
                </p>
                <p>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" cols="40" rows="4"></textarea>
                </p>
                <p>
                    <input type="submit" name="envoyer" value="Envoyer" />
                </p>
            </form>
        </div>


<?php
include ('footer.php');
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
