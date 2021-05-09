<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>This is where the fun begins...</title>
<style>
@font-face {
  font-family: E;
  src: url(prototype.ttf);
}
.sponge{
  position: absolute;
  top: 34.5%;
  left: 44.7%;
}
.boi{
  position: absolute;
  top: 20%;
  left: 44%;
}
.slider{
    position: absolute;
    top: 25%;
    left: 23%;
    width:700px;
    height:70px;
    margin:50px auto;
    border:1px solid;
    overflow:hidden;
    border-radius: 6px;
}
.slides{
    width:400%;
     height:70%;
     -webkit-animation:slide 16s infinite;
     -moz-animation:slide 16s infinite;
     animation:slide 16s infinite;
}
.slider-1, .slider-2, .slider-3, .slider-4{
    width:25%;
    height:150%;
    float:left;
}
.slider-1{
    background: royalblue;
}
.slider-2{
    background: turquoise;
}
.slider-3{
    background: royalblue;
}
.slider-4{
    background: turquoise;
}

@-webkit-keyframes slide{
    0%,100% {
        margin-left:0%;
    }

    12% {
        margin-left:0%;
    }

    24% {
        margin-left:-100%;
    }

    36% {
        margin-left:-100%;
    }

    48% {
        margin-left:-200%;
    }

    60% {
        margin-left:-200%;
    }

    72% {
        margin-left:-300%;
    }

    84% {
        margin-left:-300%;
    }
}
@-moz-keyframes slide{
    0%,100% {
        margin-left:0%;
    }

    12% {
        margin-left:0%;
    }

    24% {
        margin-left:-100%;
    }

    36% {
        margin-left:-100%;
    }

    48% {
        margin-left:-200%;
    }

    60% {
        margin-left:-200%;
    }

    72% {
        margin-left:-300%;
    }

    84% {
        margin-left:-300%;
    }
}
@keyframes example {
  from {top: -10%;}
  to {top: 5%;}
}
@keyframes example2 {
  from {left: 120%;}
  to {left: 48%;}
}
@keyframes example3 {
  from {left: -10%;}
  to {left: 1%;}
}
.ltxt{
  font-family: E;
  align-items: center;
  font-size: 30px;
  position: absolute;
  top: 47%;
  left: 41%;
}
.sub{
  font-family: E;
  align-items: center;
  font-size: 20px;
  position: absolute;
  top: 53%;
  left: 41%;
}
.choice{
  margin: 10px;
  font-family: E;
  border-radius: 2px;
}
.ddl{
  border: 3px solid turquoise;
}
.scan{
  font-family: E;
  border: 3px solid turquoise;
  background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb);
  width: 40%;
  left: 1%;
  position: absolute;
  border-radius: 8px;
  padding: 10px 10px;
  padding-top: 20px;
  padding-left: 3%;
  animation: example3;
  animation-duration: 2s;
}
.options{
  margin: 7px;
  border-radius: 2px;
}
.submit{
  margin-top: 10px;
}
.animated-border-button {
  background-color: #141414;
  border: none;
  border-radius: 5px;
  color: #ffffff;
  outline: none;
  padding: 12px 40px 10px;
  position: relative;
}

.animated-border-button:hover{
  background: linear-gradient(to right, #f12711, #f5af19);
}
body{
  background: linear-gradient(to right, #ff6e7f, #bfe9ff);
}
.info{
  font-family: E;
  width: 43%;
  font-size: 20px;
  position: absolute;
  top: 5%;
  left: 48%;
  padding: 20px;
  border: 2px solid aqua;
  border-radius: 10px;
  background: #a6ffcb;
  animation: example;
  animation-duration: 2.8s;
}
.info2{
  font-family: E;
  width: 40%;
  font-size: 22px;
  position: absolute;
  top: 25%;
  left: 48%;
  line-height: 1.8;
  padding: 40px;
  border: 2px solid gold;
  border-radius: 10px;
  background: #e1eec3;
  animation: example2;
  animation-duration: 2.8s;
}
.stagger{
  margin-bottom: 8px;
  font-size: 18px;
  opacity: 0;
  transform: translateX(100%);
  transition-property: opacity, transform;
  transition-duration: 0.3s;
  transition-timing-function: cubic-bezier(0.750, -0.015, 0.565, 1.055);
  opacity: 1;
  transform: translateX(0);
  transition-delay: calc(0.055s * var(--i));
}
</style>
</head>
<body>
<form id="sd" method="post" class="scan">
start date: <input type="text" name="start" class="options" placeholder="2021-04-07"><br>
end date: <input type="text" name="end" class="options" placeholder="2021-04-14"><br>
twitter handle: <input type="text" name="handle" class="options" placeholder="@JeffBezos"><br>
sort by:
<select id="choice" class="choice">
    <option id="likes" name="likes">likes</option>
    <option id="comments" name="comments" class="ddl">comments</option>
    <option id="retweets" name="retweets" class="ddl">retweets</option>
</select>
    <button id="go" onclick="Fun()" type="submit" class="animated-border-button">Submit</button>
</form>
<div class="info" id="info">Get an account's most liked, commented or retweeted tweets!</div>
<div class="info2" id="info2">It will take a few minutes to scan the tweets, it might take longer if you are scanning tweets from a longer time period
or an account that posts frequently.</div>
<div id="slid" class="slider">
    <div class="slides">
        <div class="slider-1"></div>
        <div class="slider-2"></div>
        <div class="slider-3"></div>
        <div class="slider-4"></div>
    </div>
</div>
<div id="sct" class="ltxt">scanning tweets...</div>
<div id="min" class="sub">this will take a minute</div>
<script>
document.getElementById("slid").style.display = "none";
document.getElementById("sct").style.display = "none";
document.getElementById("min").style.display = "none";

function Fun() {
    var e = document.getElementById("choice");
    var strUser = e.value;
    alert(strUser)
    if(strUser == "likes"){
        document.getElementById("sd").action = "create3.php";
        alert("likes!")
    }
    else if(strUser == "comments"){
        document.getElementById("sd").action = "create3.php";
        alert("comments!")
    }
    else{
        document.getElementById("sd").action = "create3.php";
        alert("retweets!")
    }
    document.getElementById("sd").style.display = "none";
    document.getElementById("info").style.display = "none";
    document.getElementById("info2").style.display = "none";
    document.getElementById("slid").style.display = "block";
    document.getElementById("sct").style.display = "block";
    document.getElementById("min").style.display = "block";
}
</script>
</body>
</html>