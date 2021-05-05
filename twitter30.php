<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Previews</title>
</head>
<body>
<?php
//ignore_user_abort(true); <== use with caution, may load results form previous tests!
//ob_end_flush();
//ob_implicit_flush();
//echo("Hey Vsauce, Michael here90000!");
file_put_contents("ids.txt", "");
//$fh = fopen( "ids.txt", "w" );
//fclose($fh);
for($k = 0; $k < 150; $k++){
    sleep(2);
    $myfile = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text = fgets($myfile);
    if(strlen( $text ) === 0){
        echo("EEEEE");
    }
    else{
        $fullurl = "https://twitframe.com/show?url=https://twitter.com{$text}";
        echo($fullurl);
        break;
    }
}
for($k2 = 0; $k2 < 20; $k2++){
    sleep(1);
    $myfile2 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text2 = fgets($myfile2);
    if( $text === $text2){
        echo("no update(from php)2");
    }
    else{
        $fullurl2 = "https://twitframe.com/show?url=https://twitter.com{$text2}";
        echo($fullurl2);
        break;
    }
}
for($k3 = 0; $k3 < 20; $k3++){
    sleep(1);
    $myfile3 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text3 = fgets($myfile3);
    if( $text2 === $text3){
        if($k3 > 5){
            echo("That's all!(from php)");
            $fullurl3 = " ";
            echo($fullurl3);
            break;
        }
        else{
            echo("still waiting for third tweet...");
        }
    }
    else{
        $fullurl3 = "https://twitframe.com/show?url=https://twitter.com{$text3}";
        echo($fullurl3);
        break;
    }
}
for($k4 = 0; $k4 < 20; $k4++){
    sleep(1);
    $myfile4 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text4 = fgets($myfile4);
    if( $text3 === $text4){
        if($k4 > 5){
            echo("That's all!(from php)");
            $fullurl4 = " ";
            echo($fullurl4);
            break;
        }
        else{
            echo("still waiting for forth tweet...");
        }
    }
    else{
        $fullurl4 = "https://twitframe.com/show?url=https://twitter.com{$text4}";
        echo($fullurl4);
        break;
    }
}
for($k5 = 0; $k5 < 20; $k5++){
    sleep(1);
    $myfile5 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text5 = fgets($myfile5);
    if( $text5 === $text5){
        if($k5 > 5){
            echo("That's all!(from php)");
            $fullurl5 = " ";
            echo($fullurl5);
            break;
        }
        else{
            echo("still waiting for fifth tweet...");
        }
    }
    else{
        $fullurl5 = "https://twitframe.com/show?url=https://twitter.com{$text5}";
        echo($fullurl5);
        break;
    }
}
?>
<p id="demo"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<script>
const sleep = (delay) => new Promise((resolve) => setTimeout(resolve, delay))

const repeatedGreetings = async () => {
  var clone = 0;
  rank = [];
  await sleep(2000)
  var text = "";
  text += "<iframe frameborder=0 height=200px width=550 src=<?=$fullurl?>></iframe>";
  await sleep(2000)
  document.getElementById("demo").innerHTML = text;
  await sleep(1000)
  var text2 = "";
  text2 += "<iframe frameborder=0 height=200px width=550 src=<?=$fullurl2?>></iframe>";
  await sleep(2000)
  document.getElementById("demo2").innerHTML = text2;
  await sleep(1000)
  try{
    var text3 = "";
    text3 += "<iframe frameborder=0 height=200px width=550 src=<?=$fullurl3?>></iframe>";
    await sleep(2000)
    document.getElementById("demo3").innerHTML = text3;
    await sleep(1000)
  }
  catch{
    console.log("only two tweets(from JS)3")
  }
  try{
    var text4 = "";
    text4 += "<iframe frameborder=0 height=200px width=550 src=<?=$fullurl4?>></iframe>";
    await sleep(2000)
    document.getElementById("demo4").innerHTML = text4;
    await sleep(1000)
  }
  catch{
    console.log("only two tweets(from JS)4")
  }
  try{
    var text5 = "";
    text5 += "<iframe frameborder=0 height=200px width=550 src=<?=$fullurl5?>></iframe>";
    await sleep(2000)
    document.getElementById("demo5").innerHTML = text5;
    await sleep(1000)
  }
  catch{
    console.log("only two tweets(from JS)5")
  }
}
repeatedGreetings()
</script>
</body>
</html>