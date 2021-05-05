<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>levr</title>
    <link rel="icon" href="itop.png">
<script src="https://unpkg.com/scrollreveal@4"></script>
<style>
@font-face {
  font-family: E;
  src: url(Prototype.ttf);
}

@keyframes example2{
  from {color: lightblue;}
  to {color: lightseagreen;}
}
/*.logo{
   background-image: url('lev5.png');
   position: absolute;
   top: 6.7%;
   left: 13%;
   width: 16.7%;
   height: 8.9%;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   background-repeat: no-repeat;
}*/
* {
   font-family: E;
   font-size: 30px;
   overflow: auto;
}
.img20 {
  filter: blur(0px);
  -webkit-filter: blur(0px);
  background-image: url('pos.png');
  position: absolute;
  width: 36%;
  top: 109%;
  left: 3%;
  z-index: 10;
  border: 4px solid lightgray;
  height: 450px;
  background-position: left;
  background-repeat: no-repeat;
  border-radius: 7px;
  box-shadow: 10px 10px 5px darkgrey;
}
.arr{
  font-size: 300px;
  position: absolute;
  width: 32%;
  top: 93%;
  left: 23%;
  z-index: 10;
  color: coral;
}
.img30 {
  position: absolute;
  background-image: url('yt.jpg');
  height: 312px;
  z-index: 10;
  width: 35.1%;
  background-position: left;
  background-repeat: no-repeat;
  top: 220%;
  left: 60%;
  border-radius: 5px;
  box-shadow: 20px 20px 10px grey;
}

.img2 {
  width: 100%;
  margin-top: 685px;
  background-image: url('jump2.jpg');
  height: 650px;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.img3 {
  margin-top: 5%;
  background-image: url('b.jpg');
  height: 750px;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.bord{
   background-color: rgba(255, 255, 255, 1);
   border: 2px solid #f1f1f1;
   position: absolute;
   top: 193.2%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 1;
   padding: 0px 1500px;
   border-radius: 5px;
}
.bord2{
   background-color: rgba(127, 255, 212, 0.9);
   border: 1px solid #f1f1f1;
   position: absolute;
   top: 287%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 1;
   padding: 0px 1500px;
   border-radius: 5px;
}

.bord3{
   background-color: rgba(127, 255, 212, 0.9);
   border: 2px solid #f1f1f1;
   position: absolute;
   top: 305%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 1;
   padding: 0px 1500px;
   border-radius: 5px;
}

.bround{
   background-color: turquoise;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 55.7%;
   left: 50%;
   transform: translate(-50%, -50%);
   z-index: 1;
   padding: 280px 630px;
   border-radius: 10px;
}
h1 {
   font-family: E;
   font-size: 36px;
   color: Gray;
   font-weight: bold;
   position: absolute;
   top: 45%;
   left: 22.5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 37.5%;
   text-align: center;
}
.sub{
   font-family: E;
   font-size: 21px;
   color: lightcoral;
   font-weight: bold;
   position: absolute;
   top: 66%;
   left: 22.5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 27.5%;
   padding: 38px 40px;
   text-align: center;
}
.begin{
   font-family: E;
   font-size: 21px;
   color: aqua;
   background: dodgerblue;
   font-weight: bold;
   position: absolute;
   top: 77%;
   left: 22.5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 27.5%;
   padding: 10px 10px;
   text-align: center;
   border-radius: 4px;
}
.begin:hover{
   font-family: E;
   font-size: 21px;
   color: aqua;
   background: dodgerblue;
   font-weight: bold;
   position: absolute;
   top: 77%;
   left: 22.5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 27.5%;
   padding: 12px 12px;
   text-align: center;
   border-radius: 4px;
}

.video {
   font-family: E;
   font-size: 30px;
   color: NavajoWhite;
   font-weight: bold;
   height 200px;
   background: LightBlue;
   position: absolute;
   border: 1px solid white;
   top: 58%;
   left: 70%;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   padding-left: 30px;
   padding-right: 30px;
   padding-top: 19px;
   padding-bottom: 200px;
   width: 34%;
   border-radius: 7px;
   box-shadow: 20px 20px 10px grey;
}
.f4 {
   font-family: E;
   color: NavajoWhite;
   font-size: 26px;
   font-weight: bold;
   position: absolute;
   top: 61.5%;
   left: 70%;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   width: 30%;
   border-radius: 4px;
}

.video2 {
   position: absolute;
   top: 365%;
   left: 50%;
   border: 5px solid #f1f1f1;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   border-radius: 12px;
}


@keyframes example {
  from {background-color: lightcyan;}
  to {background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.4);}
}
.headline2 {
   font-family: E;
   font-size: 50px;
   color: goldenrod;
   position: absolute;
   top: 150%;
   left: 40%;
   transform: translate(-50%, -50%);
   z-index: -1;
   width: 100%;
   padding: 540px 750px;
   padding-top: 30px;
   padding-left: 200%;
   text-indent: 30px;
   background-size: cover;
   max-width: 100%;
   overflow-x: hidden;
}
.h9{
   font-family: E;
   font-size: 50px;
   color: darkorange;
   position: absolute;
   top: 328%;
   left: 21%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 100%;
   padding: 580px 750px;
   padding-top: 30px;
   padding-left: 200%;
   text-indent: 30px;
   background-size: cover;
   max-width: 100%;
   overflow-x: hidden;
}
.he5{
   font-family: E;
   font-size: 50px;
   color: darkorange;
   position: absolute;
   top: 211%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 100%;
   padding-top: 30px;
   padding-left: 2%;
   text-indent: 30px;
   border-radius: 0px;
}
.l {
   font-family: E;
   font-size: 25px;
   color: goldenrod;
   position: absolute;
   top: 101%;
   left: 57.8%;
   width: 50%;
   transform: translate(-50%, -50%);
   z-index: 2;
   padding-top: 410px;
   padding-left: 30%;
}
.l3 {
   font-family: E;
   font-size: 25px;
   color: goldenrod;
   position: absolute;
   top: 149%;
   left: 57.8%;
   width: 50%;
   font-align: left;
   transform: translate(-50%, -50%);
   z-index: 2;
   padding-top: 0px;
   padding-left: 30%;
}
.ll{
   font-family: E;
   font-size: 250px;
   color: goldenrod;
   position: absolute;
   top: 174%;
   left: 67.8%;
   width: 50%;
   font-align: left;
   transform: translate(-50%, -50%);
   z-index: 2;
   padding-top: 0px;
   padding-left: 30%;
}
.l4 {
   font-family: E;
   font-size: 25px;
   color: goldenrod;
   position: absolute;
   top: 171%;
   left: 67.8%;
   width: 70%;
   font-align: left;
   transform: translate(-50%, -50%);
   z-index: 2;
   padding-top: 0px;
   padding-left: 30%;

}
.headline3 {
   font-size: 60px;
   color: mediumseagreen;
   position: absolute;
   top: 238%;
   left: 21%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 100%;
   padding: 520px 750px;
   padding-top: 30px;
   padding-left: 200%;
   text-indent: 30px;
}
.hl {
   font-size: 25px;
   color: mediumseagreen;
   position: absolute;
   top: 230%;
   left: -5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.hl2 {
   font-size: 25px;
   color: mediumseagreen;
   position: absolute;
   top: 265%;
   left: -5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}

.hl3 {
   font-size: 25px;
   color: mediumseagreen;
   position: absolute;
   top: 290%;
   left: -5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}

.hl4 {
   font-size: 25px;
   color: goldenrod;
   position: absolute;
   top: 355%;
   left: -5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   background: linear-gradient(to bottom right, aquamarine 1%, aquamarine 100%);
   position: absolute;
   border: 1px solid white;
   top: 365%;
   left: 49%;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   padding-left: 40px;
   padding-right: 40px;
   padding-top: 19px;
   padding-bottom: 190px;
   width: 70%;
   border-radius: 7px;
   box-shadow: 20px 20px 10px grey;
   text-indent: -16.5px;
   text-align: left;
}
.hl6 {
   font-size: 25px;
   color: aquamarine;
   position: absolute;
   top: 380%;
   left: 49%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   background: linear-gradient(to bottom right, orange 1%, salmon 100%);
   position: absolute;
   border: 1px solid white;
   transform: translate(-50%, -50%);
   z-index: 2;
   text-align: center;
   padding-left: 13px;
   padding-right: 10px;
   padding-top: 5px;
   padding-bottom: 5px;
   width: 70%;
   border-radius: 7px;
   box-shadow: 20px 20px 10px grey;
   text-indent: -2.5px;
   text-align: left;
}

.hl7 {
   font-size: 25px;
   color: mediumseagreen;
   position: absolute;
   top: 400%;
   left: -5%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}

.hl5 {
   font-size: 35px;
   color: mediumseagreen;
   position: absolute;
   top: 317%;
   left: 35%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 50%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}

@font-face {
  font-family: myFirstFont;
  src: url(sun.otf);
}
.start{
   font-size: 50px;
   font-weight: bold;
   position: absolute;
   transform: translate(-50%, -50%);
   top: 301%;
   left: 22%;
   z-index: 3;
   width: 80%;
   text-align: center;
   border-radius: 10px;
}
.start2{
   font-size: 50px;
   font-weight: bold;
   position: absolute;
   transform: translate(-50%, -50%);
   top: 301%;
   left: 80%;
   z-index: 3;
   width: 80%;
   text-align: center;
   border-radius: 10px;
}
.xback{
   text-size: 35px;
   text-align: center;
   font-size: 20px;
   color: gold;
   font-weight: bold;
   position: absolute;
   background-color: rgba(127, 255, 212, 0.5); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   border-radius: 10px;
   padding: 250px 100px;
   top: 358%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 1;
   width: 12%;
   text-align: center;
   box-shadow: 20px 20px 10px mediumaquamarine;
}
.xpar {
   font-size: 32px;
   color: lightseagreen;
   position: absolute;
   top: 320%;
   left: 42%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   padding-top: 30px;
   padding-left: 70%;
   text-align: left;
}
.xpar2 {
   font-size: 32px;
   color: lightseagreen;
   position: absolute;
   background-color: rgba(127, 255, 212, 0.3); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   border-radius: 10px;
   top: 380%;
   left: 78%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 25%;
   padding-top: 10px;
   padding-bottom: 10px;
   padding-left: 3%;
   padding-right: 3%;
   text-align: left;
   text-indent: -16.5px;
   box-shadow: 20px 20px 10px gray;
}
.xt {
   font-size: 43px;
   color: lightseagreen;
   position: absolute;
   top: 300%;
   left: 17%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   padding-top: 30px;
   padding-left: 70%;
   text-align: left;
}
.xyz {
   font-size: 30px;
   color: lightseagreen;
   position: absolute;
   background-color: rgba(127, 255, 212, 0.3); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   border-radius: 10px;
   top: 366%;
   left: 27%;
   transform: translate(-50%, -50%);
   width: 30%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 38%;
   padding-top: 10px;
   padding-left: 10px;
   padding-right: 10px;
   padding-bottom: 378px;
   text-align: left;
   box-shadow: 20px 20px 10px gray;
}
.xy {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 308%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.x {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 318%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.y {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 328%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.z {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 338%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.yz {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 348%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.yzx {
   font-size: 35px;
   color: coral;
   position: absolute;
   top: 358%;
   left: 15%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}

.headline5{
   text-size: 300px;
   text-align: center;
   font-size: 20px;
   color: gold;
   font-weight: bold;
   position: absolute;
   background-color: green; /* Fallback color */
   background-color: rgba(17,188,165, 0.7); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   border-radius: 10px;
   top: 275%;
   left: 25%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   height: 20%
   text-align: center;
}
.h10{
   font-size: 50px;
   color: gold;
   background-color: darkmagenta; /* Fallback color */
   background-color: rgba(139, 0, 139, 0.8); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 418%;
   left: 18%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 100%;
   padding: 600px 750px;
   padding-top: 30px;
   padding-left: 200%;
   text-indent: 30px;
   border-radius: 0px;
   background-size: cover;
   max-width: 100%;
   overflow-x: hidden;
}
.more {
   font-size: 25px;
   color: gold;
   position: absolute;
   top: 400%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.more2 {
   font-size: 25px;
   color: gold;
   position: absolute;
   top: 410%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.more3 {
   font-size: 25px;
   color: gold;
   position: absolute;
   top: 410%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.qna{
   font-size: 50px;
   color: gold;
   background-color: black; /* Fallback color */
   background-color: rgba(0, 0, 0, 0.8); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 420%;
   left: 18%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 100%;
   padding: 60px 750px;
   padding-top: 30px;
   padding-left: 200%;
   text-indent: 30px;
   border-radius: 0px;
   background-size: cover;
   max-width: 100%;
   overflow-x: hidden;
}
.a1 {
   font-size: 25px;
   color: lavender;
   position: absolute;
   top: 542%;
   left: 12%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.a2 {
   font-size: 25px;
   color: lavender;
   position: absolute;
   top: 542%;
   left: 88%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.a3 {
   font-size: 25px;
   color: lavender;
   position: absolute;
   top: 542%;
   left: 49%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding-top: 30px;
   padding-left: 70%;
   text-indent: -16.5px;
   text-align: left;
}
.sidenav {
  height: 100%;
  width: 0;
  font-size: 35px;
  position: fixed;
  z-index: 100;
  top: -3%;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: turquoise;
}

.sidenav .closebtn {
  position: absolute;
  color: white;
  top: 5%;
  left: 5%
  z-index: 101;
  right: 25px;
  font-size: 40px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.open{
  position: absolute;
  margin-top: 10px;
  margin-left: 5px;
  background-image: url('lev6.png');
  top: 7.4%;
  left: 17%;
  width: 25.7%;
  height: 15.9%;
  transform: translate(-50%, -50%);
  z-index: 1;
  text-align: center;
  background-repeat: no-repeat;
}
.alpha{
  font-family: E;
  font-size: 20px;
  position: absolute;
  margin-top: 10px;
  margin-left: 5px;
  color: turquoise;
  top: 8%;
  left: 22%;
  width: 25.7%;
  height: 15.9%;
  transform: translate(-50%, -50%);
  z-index: 2;
  text-align: center;
  background-repeat: no-repeat;
}
.open2{
  position: absolute;
  margin-top: 10px;
  margin-left: 5px;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="den.html" style="color: turquoise">Home</a>
  <a href="serv2.html">Get started!</a>
</div>

<span class="open" style="font-size:40px;cursor:pointer" onclick="openNav()"></span>
<span class="open2" style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="sub">&#8609; ==> Try it! <== &#8609;</div>
<h1>See what people engage with.</h1>
<div class="video">Levr
</div>
<div class="f4">Our tool lets you find the most popular tweets of any account or hashtag.</div>
<div class="headline2"><h5>How it works
</h5>
</div>
<div class="l">&#10153We rank your videos using our own human-like AI.</div>
<div class="l3">
    In order to rank your video, it
    searches for the keyword
    that you want to rank for,
    scrolls down until it
    finds your video, clicks on it,
    watches most of the video and
    repeats the proccess a specified
    number of times per day depending on
    how high you want to rank and how
    competitive that keyword is while behaving exactly like a human.
</div>
<div class="bord"></div>
<div class="headline3"><h5>Why us?
</h5>
</div>
<div class="hl">
    * most youtube "growth hacking" websites
    either view bot your video without any retention, thus,
    don't increase the ranking of your video for more
    organic views and subscribers. Or, they view your video with good
    retention but do so by inserting your video url into the browser
    and watching it (this method is called direct traffic).
    Direct traffic can ultimately increase your rankings a little bit, but if you want to
    properly rank on youtube, this service is the right one for you.
</div>
<div class="hl2">* Youtube is getting more competitive by the minute...
    If you want to grow your channel without grinding all-day, everyday, this is the service for you...</div>
<div class="hl3">+ This service is a lot more efficient and cheaper than running ads to advertise your channel.</div>
<div class="hl4">* We use our AI to mimic human behaviour in order to grow your audience faster. We believe that social media is getting extremely competitive and the time needed to grow even a small following is growing, with millions of new people starting to use social media every day. New creators need to put in a lot of effort to get noticed by even a small audience, but we try and make the process a lot less time and effort consuming.
</div>
<div class="hl6">If you are a youtube creator that has put a lot of work into your channel but never got any attention, this is the service for you.</div>
<div class="hl7"></div>
<div class="hl5">Our goal</div>
<script>var scrollEventHandler = function()
{
  window.scroll(0, window.pageYOffset)
}

window.addEventListener("scroll", scrollEventHandler, false);</script>

<div class="qna"></div>
<div class="bround"></div>
<div class="logo"></div>
<div class="alpha">Alpha</div>
<a href="i2.php" class="begin" style="text-decoration: underline; font-size: 28px;">Start!</a>
<div class="bord3"></div>
</body>
</html>