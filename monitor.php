<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for($k = 0; $k < 15; $k++){
    sleep(2);
    try{
        $myfile = fopen("ids.txt", "r") or die("Unable to open file!");
        //$text = fread($myfile,filesize("ids.txt"));
        $text = fgets($myfile);
        $fullurl = "https://twitframe.com/show?url=https://twitter.com{$text}";
        echo($fullurl);
        fclose($myfile2);
        break;
    }
    catch(exception $e){
        echo('no url yet');
    }
}
?>
<p id="demo"></p>
<p id="demo2"></p>

<button onclick="func()">Click me</button>

<script>
var reader = new XMLHttpRequest() || new ActiveXObject('MSXML2.XMLHTTP');

function loadFile() {
    reader.open('get', 'ids.txt', true); 
    reader.onreadystatechange = displayContents;
    content = reader.send(null);
}
loadFile()
/*unction displayContents() {
    if(reader.readyState==4) {
        var el = document.getElementById('demo');
        el.innerHTML = reader.responseText;
    }
}*/

function func() {
    var text = "";
    text += "<iframe frameborder=0 height=200px width=550 src=https://twitframe.com/show?url=https://twitter.com" + content + "></iframe>";
    document.getElementById("demo").innerHTML = text;
}
/*function func2() {
    var tweets2 = '<?=$fullurl2?>';
    console.log(tweets2)
    var text2 = "";
    text2 += "<iframe frameborder=0 height=200px width=550 src=" + tweets2 + "></iframe>";
    document.getElementById("demo2").innerHTML = text2;
}*/
</script>
</body>
</html>