<?php
//POST_ARRAY UITLEZEN
$id = $_POST['id'];
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mail = $_POST['mail'];


// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
$qeury = "UPDATE nieuwsbrief ";
$qeury .= "SET id = '$id', voornaam = '$voornaam',tussenvoegsel = '$tussenvoegsel',achternaam = '$achternaam',mail ='$mail'";
$qeury .="WHERE id ='$id'";
// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

// 4. VEBINDING VERBREKEN
    mysqli_close($dbc);
header('Location: beheren.php');

?>