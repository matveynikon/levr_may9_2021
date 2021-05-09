<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Copy cat!</title>
    <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>
</head>
<body>
<div id="after"></div>
<div id="after2"></div>
<div id="after3"></div>
<div id="after4"></div>
<div id="after5"></div>
<script>
  var text11 = "";
  text11 += localStorage.getItem("storageName");
  document.getElementById("after").innerHTML = text11;
  var text10 = "";
  text12 += localStorage.getItem("storageName2");
  document.getElementById("after2").innerHTML = text12;
  var text12 = "";
  text13 += localStorage.getItem("storageName3");
  document.getElementById("after3").innerHTML = text13;
  var text13 = "";
  text14 += localStorage.getItem("storageName4");
  document.getElementById("after4").innerHTML = text14;
  var text10 = "";
  text15 += localStorage.getItem("storageName5");
  document.getElementById("after5").innerHTML = text15;
</script>
</body>
</html>