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
        #sumbit{
            background-color:white;/*Green*/
            border:1px  solid Gray;
            color:black;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            transition-duration:0.4s;
            cursor:pointer;
            border-radius:5px}

        #sumbit:hover{background-color:orange;}
 
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

    </style>
</head>
<body>
<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mail = $_GET['mail'];
 ?>
<form method="POST" action="verwerk_edit.php">
    <fieldset>
        <legend><strong>Edit</strong></legend>
        <input type="hidden"  name="id" value="<?php echo $id;?>">
        <label>voornaam: <br><input type="text" name="voornaam" value="<?php echo $voornaam;?>"></label><br>
        <label>tussenvoegsel: <br><input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel;?>" ></label><br>
        <label>achternaam: <br><input type="text" name="achternaam" value="<?php echo $achternaam;?>" ></label><br>
        <label>E-mail: <br><input type="email" name="mail" value="<?php echo $mail;?>" ></label>
        <input type="submit" name="sumbit" value="Sumbit"  id="sumbit">
    </fieldset>
</form>

</body>
</html>