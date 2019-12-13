<?php
//POST_ARRAY UITLEZEN
$voornaam = $_POST{'voornaam'};
$tussenvoegsel = $_POST{'tussenvoegsel'};
$achternaam = $_POST{'achternaam'};
$mail = $_POST{'mail'};

// DATA IN DATABBASE STOPPEN
// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
$qeury = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mail')";
// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet query niet in orden');
// 4. VEBINDING VERBREKEN
mysqli_close($dbc);


// DIT WORD IN DE DATA VERWERKT
if ($result){
    echo'<h2>deze gegevens zijn verstuurt</h2>';
    echo '<p><strong>voornaam: </strong>'.$voornaam.'</p>';
    echo '<p><strong>tussenvoegsel: </strong>'.$tussenvoegsel.'</p>';
    echo '<p><strong>achternaam: </strong>'.$achternaam.'</p>';
    echo '<p><strong>E-mail: </strong>'.$mail.'</p>';

}else{
    echo 'result false';
}

echo '<a href="index.php">click hier om terug te gaan</a>';

?>