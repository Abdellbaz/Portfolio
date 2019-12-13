<?php
//POST_ARRAY UITLEZEN
$onderwerp = $_POST['onderwerp'];
$bericht = $_POST{'bericht'};
if (empty($onderwerp)){echo '<fieldset>Onderwerp is verplicht</fieldset>';}
elseif (empty($bericht)) {echo '<fieldset>Bericht is verplicht</fieldset>';}
else{





// DATA IN DATABBASE STOPPEN
// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost',24916,'elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
    $qeury = "SELECT mail FROM nieuwsbrief";
// 3. QEURY UITVOEREN
    $result = mysqli_query($dbc,$qeury) or die('werkt niet query niet in orden');
// 4. VEBINDING VERBREKEN
    mysqli_close($dbc);
    while ($row = mysqli_fetch_array($result)){
        $to = $row['mail'];
        $from = 'From:  DontReply@FakeMail.you';
    mail( $to,$onderwerp,$bericht,$from );
    echo '<fieldset> uw mail is verstuurt, naar  '.$to.'</fieldset><br>';}}
echo '<a href="versturen.php">click hier om terug te gaan</a>';
?>
