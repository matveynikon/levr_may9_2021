<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>hey...</title>
</head>
<body>
<?php
  $start2 = $_POST["start"];
  $s2 = "'$start'";
  $end2 = $_POST["end"];
  $e2 = "'$end'";
  $handle2 = $_POST["handle"];
  $_SESSION['start'] = $s2;
  $_SESSION['end'] = $e2;
  $_SESSION['handle'] = $handle2;
  sleep(3);
  echo("starting");
  //exec("nohup php create3.php &");
  echo("done!");
  header("Location: /create3.php",TRUE,302);
  echo("redirect!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
?>
<p>hey...</p>
</body>
</html>