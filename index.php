<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<p>...matthew..</p>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);  
  ignore_user_abort(true);   
  //exec("npm install");
  exec("node 2.\ search/amazon.js",$o,$v);
  print_r($o);
  echo($v);
?>
</body>
</head>
