<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>hey...</title>
</head>
<body>
<?php
  $myfile = fopen("ids.txt", "r");
  $text = fread($myfile,filesize("ids.txt"));
  echo($text);
  echo("let's goooooo!!!");
?>
<p>hey...</p>
</body>
</html>