
  <?php
  header("Content-Type: application/json; charset=UTF-8");
  $fileOutput = "test.json";
  $objson =  json_decode($_POST["x"], false);

  writeJson($objson, $fileOutput);
  function writeJson($objson, $fileOutput){
  $saveJson = json_encode($objson);
  $file = fopen($fileOutput, "w") or die ("can't open file");
  fwrite($file, $saveJson);
  fclose($file);
  }
  ?>
