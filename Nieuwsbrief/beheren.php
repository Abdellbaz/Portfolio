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
        th, td,tr {
            position :relative;
            width: 300px;
            padding: 0.2em;
            font-size: 1.2em;
            color: black;
            border: 2px solid black;
            text-align: center;}

    </style>
</head>
<body>
<?php

// DATA IN DATABBASE STOPPEN
// 1. VERBINDEN MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
// 2. QEURY SCHIJVEN VOOR DATABASE
    $qeury = "SELECT * FROM nieuwsbrief";
// 3. QEURY UITVOEREN
    $result = mysqli_query($dbc,$qeury) or die('werkt niet query niet in orden');
// 4. VEBINDING VERBREKEN
    mysqli_close($dbc);
    echo '<table><tr><th> id </th> <th> voornaam </th> <th> tussenvoegsel </th> <th> achternaam </th> <th> mail </th></tr>';
    while ($row = mysqli_fetch_array($result)){
        $id = $row{'id'};
        $voornaam = $row['voornaam'];
        $tussenvoegsel = $row['tussenvoegsel'];
        $achternaam = $row['achternaam'];
        $mail = $row['mail'];
        echo '<tr>';
        echo "<td>$id</td> <td>$voornaam</td> <td>$tussenvoegsel</td> <td>$achternaam</td> <td>$mail</td>";
        echo '<td><a href="delete.php?id=' . $id . '" >DELETE</a></td>';
        echo '<td><a href="edit.php?id='.$id.'&voornaam='.$voornaam.'&tussenvoegsel='.$tussenvoegsel.'&achternaam='.$achternaam.'&mail='.$mail.'" >EDIT</a></td>';
        echo '</tr>';

    }
echo '</table>';

echo '<a href="index.php">click hier om terug te gaan</a>';
?>
</body>
</html>