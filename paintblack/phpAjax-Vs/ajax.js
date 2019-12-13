function ajax(action, data) {
  let jsonFile = data;
  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

    if (action == "getJson") {
    let httpString = jsonFile;
      if (debug) console.log(httpString);
    xmlhttp.open("POST", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function(jsonString) {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
       if (debug) console.log("http response = " + xmlhttp.responseText); //debug
        jsonString = xmlhttp.responseText; // read the string from the server
        readJson(jsonString);}}}
       if (action == "postJson") {// [get] kan niet gebruikt woorden als je array te lang is
        // let httpString = "write.php?x=" + jsonFile;
        // console.log(httpString);
        // xmlhttp.open("GET",httpString, true);
        // xmlhttp.send();
        let httpString = jsonFile;
        console.log(httpString);
        xmlhttp.open("POST","write.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send('x=' + JSON.stringify(httpString));

      }
}
