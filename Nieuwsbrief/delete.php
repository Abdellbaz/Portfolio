<?php
//POST_ARRAY UITLEZEN
$id = $_GET['id'];


// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
$qeury = "DElETE  FROM nieuwsbrief WHERE id ='$id'";

// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');
// 4. VEBINDING VERBREKEN
mysqli_close($dbc);
header('Location: beheren.php');
?>