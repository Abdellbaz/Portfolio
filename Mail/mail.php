<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
    <meta name="author" content="Abdelaziz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdelaziz Elbaze Opdracht 5</title>
    <style media="screen">
        input,textarea,form{
            display: block;
            text-align: center;
            align-self: center;
            align-content: center;
            margin:auto;
        }
        fieldset{
            width: 400px;
            margin:auto;
        }
        body{
            text-align: center;
        }

    </style>
</head>
<body>
<form method="POST" action="mail.php">
    <fieldset>
        <legend>Mail</legend>
        <label>Afzender:<input type="email" name="afzender"/></label>
        <label>Onderwerp:<input type="text" name="onderwerp"/></label>
        <label>Bericht:<textarea rows="4" cols="50" name="bericht"></textarea></label><br>
        <button   type="submit" name="button" value="Verstuur">Verstuur</button>
    </fieldset>
</form><br>
<div id="validatie">
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FOpdracht5%2Fmail.php" target="_blank">
        <img alt="Valide HTML5" src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png"></a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FOpdracht5%2Fmail.php&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">
        <img alt="Valide CSS" src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif"></a>
</div>
<?php
if (empty($_POST['afzender'])) {echo '<fieldset>Afzender is verplicht</fieldset>';}
elseif (empty($_POST['onderwerp'])){echo '<fieldset>Onderwerp is verplicht</fieldset>';}
elseif (empty($_POST['bericht'])) {echo '<fieldset>Bericht is verplicht</fieldset>';}
else{
    mail('hospogustu@enayu.com',@$_POST['onderwerp'],@$_POST['bericht'],'from:   '.@$_POST['afzender']);
    echo '<fieldset>uw mail is verstuurt, bedankt</fieldset>';}
?>
</body>
</html>