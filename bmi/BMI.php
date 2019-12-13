 <?php

 $height = $_GET['height'];
 $weight = $_GET['weight'];

 function BMIcal($height,$weight){
  $height = $height/100;//omrekenen naar meter
  $height=$height*$height;
  $bmi = round($weight/$height, 1);
  switch ($bmi) {
    case $bmi >0   &&   $bmi <18.5:echo "Uw bmi is: ".$bmi."  Ondergewicht";break;
    case $bmi >=18.5 && $bmi <=24.9:echo "Uw bmi is: ".$bmi." Normaal/gezond";break;
    case $bmi >=25 &&   $bmi <=26.9:echo "Uw bmi is: ".$bmi." Licht overgewicht";break;
    case $bmi >=27 &&   $bmi <=29.9:echo "Uw bmi is: ".$bmi." Matig overgewicht";break;
    case $bmi >=30 &&   $bmi <=34.9:echo "Uw bmi is: ".$bmi." Obesitas(Class 1)";break;
    case $bmi >=35 &&   $bmi <=39.9:echo "Uw bmi is: ".$bmi." Obesitas(Class 2)";break;
    case $bmi >=40:echo "Uw bmi is: ".$bmi." Morbide obesitas";break;
    default:break;}}
    if ($height>0&&$weight>0) {
      BMIcal($height,$weight);
    }
    else if (is_string($height)||is_string($weight)) {
    echo 'please enter numeric data the number must be above zero ';

  }




  ?>