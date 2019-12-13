<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Abdelaziz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdelaziz Elbaze Opdracht 8</title>
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

<h1>Een plan voor jouw ontwikkeling</h1>
<p>Om een eerste stap te zetten naar een persoonlijk opleidingplan zul je eerst een paar vragen voor jezelf moeten beantoorden. Dit formulier helpt jou daar bij.</p>

<form action="Formulier.php" method="POST">
    <label>Naam:
    <input type="text" name="Naam" placeholder="Naam" autofocus></label>

    <select name="klas" >
        <option value="">selecteer je klas</option>
        <option value="MG1A">MG1A</option>
        <option value="MG1B">MG1B</option>
        <option value="MG1C">MG1C</option>
        <option value="MG1D">MG1D</option>
    </select>
   Geslacht:
    <label><input type="radio" name="Geslacht" value="Vrouw" required>Vrouw</label>
    <label><input type="radio" name="Geslacht" value="Man" required>Man</label>

    <fieldset>
        <legend>Welbevinden</legend>
        <p>Hoe positief ben je op dit moment over je opleiding?
        </p>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="0" required> 0</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="1" required> 1</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="2" required> 2</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="3" required> 3</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="4" required> 4</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="5" required> 5</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="6" required> 6</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="7" required> 7</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="8" required> 8</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="9" required> 9</label>
        <label><input type="radio" name="PositiefOverJeOpleiding" value="10" required> 10</label>
        <p>Hoe gemotiveerd ben je momenteel om de opleiding af te maken?</p>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="0" required> 0</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="1" required> 1</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="2" required> 2</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="3" required> 3</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="4" required> 4</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="5" required> 5</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="6" required> 6</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="7" required> 7</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="8" required> 8</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="9" required> 9</label>
        <label><input type="radio" name="GemotiveerdOverJeOpleiding" value="10" required> 10</label>
        <p>Hoeveel vertrouwen heb je momenteel in je eigen kunnen?</p>
        <label><input type="radio" name="ZelfVertrouwen" value="0" required> 0</label>
        <label><input type="radio" name="ZelfVertrouwen" value="1" required> 1</label>
        <label><input type="radio" name="ZelfVertrouwen" value="2" required> 2</label>
        <label><input type="radio" name="ZelfVertrouwen" value="3" required> 3</label>
        <label><input type="radio" name="ZelfVertrouwen" value="4" required> 4</label>
        <label><input type="radio" name="ZelfVertrouwen" value="5" required> 5</label>
        <label><input type="radio" name="ZelfVertrouwen" value="6" required> 6</label>
        <label><input type="radio" name="ZelfVertrouwen" value="7" required> 7</label>
        <label><input type="radio" name="ZelfVertrouwen" value="8" required> 8</label>
        <label><input type="radio" name="ZelfVertrouwen" value="9" required> 9</label>
        <label><input type="radio" name="ZelfVertrouwen" value="10" required> 10</label>
    </fieldset>

    <fieldset>
        <legend>sterke kanten</legend>
        <p>wat zijn jouw sterke kanten?</p>
        <label><input type="checkbox" name="SterkePunten1" value="Coderen in HTML/CSS"> Coderen in HTML/CSS</label>
        <label><input type="checkbox" name="SterkePunten2" value="Programmeren in Java"> Programmeren in Java</label>
        <label><input type="checkbox" name="SterkePunten3" value="Scripting: programmeren in JavaScript"> Scripting: programmeren in JavaScript</label>
        <label><input type="checkbox" name="SterkePunten4" value="Planning"> planning</label>
        <label><input type="checkbox" name="SterkePunten5" value="Samenwerken"> Samenwerken</label>

    </fieldset>

    <fieldset>
        <legend>Nog te ontwikkelen</legend>
        <p>Aan welke skills moet je nog extra aandacht besteden?</p>
        <label><input type="checkbox" name="VerbeterPunten1" value="Coderen in HTML/CSS"> Coderen in HTML/CSS</label>
        <label><input type="checkbox" name="VerbeterPunten2" value="Programmeren in Java"> Programmeren in Java</label>
        <label><input type="checkbox" name="VerbeterPunten3" value="Scripting: programmeren in JavaScript"> Scripting: programmeren in JavaScript</label>
        <label><input type="checkbox" name="VerbeterPunten4" value="Planning"> planning</label>
        <label><input type="checkbox" name="VerbeterPunten5" value="Samenwerken"> Samenwerken</label>

    </fieldset>


    <label><p>Wat zijn jouw plannen voor de toekomst?</p>
    <textarea rows="4" cols="40" name="OverToekomst" placeholder="voer wat je plannen  zij voor de toekomst"></textarea></label>

    <button  type="submit" name="button" value="Verstuur">Verstuur</button>

</form>
<div id="validatie">
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FOpdracht4%2FFormulier.php" target="_blank">
        <img alt="Valide HTML5" src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png"></a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FOpdracht4%2FFormulier.php&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">
        <img alt="Valide CSS" src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif"></a>
</div>

<?php
if (empty($_POST)){
    echo '<h3>Vul dit formulier in voor Resultaat</h3>';

}else {
//---------------------------------------------------
    echo '<br><p><strong>Naam:</strong> '.@$_POST['Naam'].'</p><p><strong>Klas:</strong> '.@$_POST['klas'].'</p><p><strong>Geslacht: </strong>'.@$_POST['Geslacht'].'</p><br>';
//---------------------------------------------------
    echo '<p><strong>Hoe positief ben je op dit moment over je opleiding?</strong> '.'Cijfer: '.@$_POST['PositiefOverJeOpleiding'].'</p>';
    echo '<p><strong>Hoe gemotiveerd ben je momenteel om de opleiding af te maken?</strong> '.'Cijfer: '.@$_POST['GemotiveerdOverJeOpleiding'].'</p>';
    echo '<p><strong>Hoeveel vertrouwen heb je momenteel in je eigen kunnen?</strong> '.'Cijfer: '.@$_POST['ZelfVertrouwen'].'</p>';
//---------------------------------------------------
    $SterkePunten = array(@$_POST['SterkePunten1'],@$_POST['SterkePunten2'],@$_POST['SterkePunten3'],@$_POST['SterkePunten4'],@$_POST['SterkePunten5']);
    echo '<br><fieldset style="max-width: 500px;"><legend><strong>SterkePunten:</strong></legend><p style="color:green;">';foreach($SterkePunten as $x_value) {echo $x_value.'<br>';}echo '</p></fieldset>';
//---------------------------------------------------
    $VerbeterPunten= array(@$_POST['VerbeterPunten1'],@$_POST['VerbeterPunten2'],@$_POST['VerbeterPunten3'],@$_POST['VerbeterPunten4'],@$_POST['VerbeterPunten5']);
    echo '<br><fieldset style="max-width: 500px;"><legend><strong>VerbeterPunten:</strong></legend><p style="color:red;">';foreach($VerbeterPunten as $x_value) {echo   $x_value.'<br>';}echo '</p></fieldset>';
//---------------------------------------------------
    echo '<br><fieldset style="max-width: 500px;"><legend><strong> zijn jouw plannen voor de toekomst?:</strong></legend><p style="color:blue;">'.@$_POST['OverToekomst'].'</p></fieldset><br><br>';
}
?>

</body>
</html>