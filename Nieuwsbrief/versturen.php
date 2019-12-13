<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
    <meta name="author" content="Abdelaziz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
<form method="POST" action="verwerk_versturen.php">
    <fieldset>
        <legend>Mail</legend>
        <label>Onderwerp:<input type="text" name="onderwerp"/></label>
        <label>Bericht:<textarea rows="4" cols="50" name="bericht"></textarea></label><br>
        <button   type="submit" name="button" value="Verstuur">Verstuur</button>
    </fieldset>
</form><br>
<a href="index.php">terug naar homepage</a>
</body>
</html>