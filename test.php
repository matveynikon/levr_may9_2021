<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    top: 40%;
    left: 21.5%;
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
.ltxt{
  font-family: E;
  font-size: 30px;
  position: absolute;
  top: 60%;
  left: 40%;
}
.sub{
  font-family: E;
  font-size: 20px;
  position: absolute;
  top: 67%;
  left: 40%;
}
</style>
</head>
<body>
<iframe class="sponge" src="sponge.gif" width=480 height=485.393 frameBorder="0"></iframe>
<div class="slider">
    <div class="slides">
        <div class="slider-1"></div>
        <div class="slider-2"></div>
        <div class="slider-3"></div>
        <div class="slider-4"></div>
    </div>
</div>
<div class="ltxt">scanning tweets...</div>
<div class="sub">this will take a minute</div>
</body>
</html>