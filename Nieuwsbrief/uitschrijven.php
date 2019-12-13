<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwsbrief inschrijven</title>
    <style media="screen">
        button{
            background-color:white;/*Green*/
            border:1px  solid Gray;
            color:black;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            transition-duration:0.4s;
            cursor:pointer;
            border-radius:5px}

        button:hover{background-color:orange;}
        #k{
            color:black;
            text-align:center;
            text-decoration: none;
            background-color:white;
            border:1px  solid black;
            display:inline-block;
            transition-duration:0.4s;
            cursor:pointer;
            border-radius:5px
        }
        #k:hover{background-color:orange;}
        label:hover{background-color:orange;}
        label{
            border-radius:5px;
            transition-duration:0.4s;
            background-color: white;
            border:1px  solid Gray;
            padding: 0.5em;
            cursor: pointer;
            color:black;
            display: inline-block;
            text-align: center;
        }
        input[type="radio"]{display: block;}
    </style>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>uitschrijven</h2>
<a href="index.php">terug naar homepage</a><br><br>
<form method="POST" action="verwerk_uitschrijven.php">
    <fieldset>
        <legend><strong>uitschrijven</strong></legend>
        <label>E-mail: <br><input type="email" name="mail" required></label>
        <button  type="submit" name="button" value="Verstuur">Verstuur</button>
    </fieldset>



</form>
</body>
</html>