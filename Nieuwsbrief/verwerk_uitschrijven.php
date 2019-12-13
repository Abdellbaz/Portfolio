<?php
//POST_ARRAY UITLEZEN
$mail = $_POST{'mail'};

// DATA IN DATABBASE STOPPEN
// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
$qeury = "SELECT * FROM nieuwsbrief WHERE mail ='$mail'";
// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');



// REGELS TELLEN
$numer_of_rows = mysqli_num_rows($result);
// TESTEN OF REGELS WERKT
if ($numer_of_rows==0){
    echo 'deze <strong>  '.$mail.'</strong>  mail staat niet in de data base<br>';
    echo '<a href="uitschrijven.php">click hier om opnieuw te proberen</a>';
    exit();
}
// 2. QEURY SCHIJVEN VOOR DATABASE
$qeury ="DELETE FROM nieuwsbrief WHERE mail='$mail'";
// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet (DELETE)query niet in orden');
// 4. VEBINDING VERBREKEN
mysqli_close($dbc);
echo 'deze <strong>  '.$mail.'</strong> mail is verwijderd uit de data base<br>';
echo '<a href="index.php">click hier om terug te gaan</a>';
?>