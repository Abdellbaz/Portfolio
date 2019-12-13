<?php
$resultArray=array();
$search = strval($_GET['search']);
$type = strval($_GET['type']);

$dbc = mysqli_connect('localhost','24916','elbaze2','24916_db') or die('werkt niet dabase niet in orden');
$qeury="SELECT * FROM country WHERE Name LIKE '$search%'";
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

if ($type=='list'){
    while($row = mysqli_fetch_array($result)) {$resultArray[]=$row['Name'];}
    echo json_encode($resultArray);}

else  if ($type=='answer'){
    while($row = mysqli_fetch_array($result)) {
        foreach ($resultArray as $x){
            array_push($resultArray,$x);}
        array_push($resultArray,$row['Name'],$row['Code'],$row['Name'], $row['Continent'],$row['Region'],$row['SurfaceArea'],$row['IndepYear'],
            $row['Population'],$row['LifeExpectancy'],$row['GNP'],$row['GNPOld'],$row['LocalName'],$row['GovernmentForm'],$row['HeadOfState'],$row['Capital'], $row['Code2']);}
    echo json_encode($resultArray);}


else if ($type=='info') {
    $search= str_replace('<strong>Code               :   </strong>','',$search);
    $qeury="SELECT * FROM countrylanguage WHERE CountryCode LIKE '$search'";
    $result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

    echo " <h1>Countrylanguage</h1><table><tr><th>CountryCode</th><th>Language</th><th>IsOfficial</th><th>Percentage</th></tr>";
    while($row = mysqli_fetch_array($result)) {echo "<tr><td>" . $row['CountryCode'] . "</td> <td>" . $row['Language'] . "</td> <td>" . $row['IsOfficial'] . "</td> <td>" . $row['Percentage'] . "</td></tr>";}echo "</table>";

    $qeury="SELECT * FROM city WHERE CountryCode LIKE '$search'";
    $result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

    echo " <h1>City</h1><table><tr><th>CountryCode</th><th>Name</th><th>District</th><th>Population</th></tr>";
    while($row = mysqli_fetch_array($result)) {echo "<tr><td>" . $row['CountryCode'] . "</td> <td>" . $row['Name'] . "</td> <td>" . $row['District'] . "</td> <td>" . $row['Population'] . "</td></tr>";}echo "</table>";

}
mysqli_close($dbc);


?>