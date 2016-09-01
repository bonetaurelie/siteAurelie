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
        <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" action="send_email.php" method="post">
            <div class="form-group">
                <label for="nom" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Votre nom :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="nom" name="nom" />
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Votre prénom :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="prenom" name="prenom" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Votre E-mail :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Votre téléphone :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="tel" name="tel" />
                </div>
            </div>
            <div class="form-group">
                <label for="sujet" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Objet du message :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" class="form-control" id="sujet" name="sujet" />
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Message :</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <textarea id="message" class="form-control" name="message" cols="40" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
                    <input type="submit" class="form-control" name="envoyer" value="Envoyer" />
                </div>
            </div>
        </form>
    </div>

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
