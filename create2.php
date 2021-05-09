<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>
<style>
@font-face {
  font-family: E;
  src: url(prototype.ttf);
}
.info2{
  font-family: E;
  width: 40%;
  font-size: 22px;
  position: absolute;
  top: 25%;
  left: 50%;
  line-height: 1.8;
  padding: 40px;
  border-radius: 10px;
  background: gold;
}
.flexbox-centering {
  border: 3px solid aquamarine;
  background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb);
  font-family: E;
  font-size: 27px;
  display: flex;
  border-radius: 9px;
  justify-content: center;
  align-items: center;
  height: 100px;
}
</style>    
</head>
<body>
<?php
$start = $_POST["start"];
$s2 = "'$start'";
$end = $_POST["end"];
$e2 = "'$end'";
$handle = $_POST["handle"];
$myfile = fopen("bob2.js", "w") or die("Unable to open file!");
$user = '"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36"';
$txt3 = "const puppeteer = require('puppeteer');
const fs = require('fs');

var ti = []
var ti2 = []
var ti3 = []
var ti4 = []
var ti5 = []
var ti6 = []
var ti7 = []
var ti8 = []
var ti9 = []
var ti10 = []
var ti11 = []
var ti12 = []
var mega = []
var mega2 = []

let y = 0
var di = []
var di2 = []
var di3 = []
var di4 = []
var di5 = []
var di6 = []
var di7 = []
var di8 = []
var di9 = []
var di10 = []
var di11 = []
var di12 = []
var giga = []
var giga2 = []
var terra = []
var hyper = []
var hyper2 = []
var dhyper = []
var dhyper2 = []

let fin = 0
var getDaysArray = function(start, end) {
    for(var arr=[],dt=new Date(start); dt<=end; dt.setDate(dt.getDate()+1)){
        arr.push(new Date(dt));
    }
    return arr;
};
arr2 = []
var daylist = getDaysArray(new Date($s2),new Date($e2));
dd = daylist.map((v)=>v.toISOString().slice(0,10))
arr2.push(dd)
//console.log(arr2)
//console.log(arr2[0][9])
var v = 27;
var rank = []
var replies = []
async function start() {
  const preurl = 'https://twitter.com/search?q=crypto&src=typed_query&f=user'
  const browser = await puppeteer.launch({
    args: ['--no-sandbox',
    '--user-agent=$user']
  });
  const page = await browser.newPage()
  //let body = await page.evaluate(() => document.body.innerHTML)
  await page.setViewport({ width: 700, height: 1200})
  idstream = []
  await page.goto(preurl)
  let han = '$handle'
  let someVar = han.replace('@', 'A');
  console.log(someVar);
  const url = 'https://twitter.com/search?q=(from%3' + someVar + ')%20until%3A' + $e2 + '%20since%3A' + $s2 + '%20-filter%3Areplies&src=typed_query&f=live';
  await page.goto(url, { waitUntil: 'domcontentloaded' })
  await page.waitForTimeout(2000)
  await page.setRequestInterception(true);
  page.on('request', request => {
    const url = request.url().toLowerCase()
    const resourceType = request.resourceType()
    if (resourceType == 'media' ||
      url.endsWith('.mp4') ||
      url.endsWith('.avi') ||
      url.endsWith('.flv') ||
      url.endsWith('.wav') ||
      url.endsWith('.jpg') ||
      url.endsWith('.png') ||
      url.endsWith('.jpeg') ||
      url.endsWith('.mov')) {
      console.log('ABORTING: video')
      request.abort();
    }
    else
      request.continue();
  })
  for(r = 0; r < 1000000; r++){
    await page.waitForTimeout(100)
    var title = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(1) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data = await page.$$";
    $txt4 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(1) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title2 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(2) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data2 = await page.$$";
    $txt5 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(2) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title3 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(3) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data3 = await page.$$";
    $txt6 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(3) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title4 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(4) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data4 = await page.$$";
    $txt7 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(4) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title5 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(5) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data5 = await page.$$";
    $txt8 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(5) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title6 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(6) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data6 = await page.$$";
    $txt9 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(6) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title7 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(7) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data7 = await page.$$";
    $txt10 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(7) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title8 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(8) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data8 = await page.$$";
    $txt11 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(8) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    var title9 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(9) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
    var data9 = await page.$$";
    $txt12 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(9) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
    mega2.push(title)
    mega2.push(title2)
    mega2.push(title3)
    mega2.push(title4)
    mega2.push(title5)
    mega2.push(title6)
    mega2.push(title7)
    mega2.push(title8)
    mega2.push(title9)
    for(i = 0; i < title.length; i++){
      giga2.push([data[i].toString(), title[i].toString()])
    }
    di.push(data[i])
    for(i = 0; i < title2.length; i++){
      giga2.push([data2[i].toString(), title2[i].toString()])
    }
    di2.push(data2)
    for(i = 0; i < title3.length; i++){
      giga2.push([data3[i].toString(), title3[i].toString()])
    }
    di3.push(data3)
    for(i = 0; i < title4.length; i++){
      giga2.push([data4[i].toString(), title4[i].toString()])
    }
    di4.push(data4)
    for(i = 0; i < title5.length; i++){
      giga2.push([data5[i].toString(), title5[i].toString()])
    }
    di5.push(data5)
    for(i = 0; i < title6.length; i++){
      giga2.push([data6[i].toString(), title6[i].toString()])
    }
    di6.push(data6)
    for(i = 0; i < title7.length; i++){
      giga2.push([data7[i].toString(), title7[i].toString()])
    }
    di7.push(data7)
    for(i = 0; i < title8.length; i++){
      giga2.push([data8[i].toString(), title8[i].toString()])
    }
    di8.push(data8)
    for(i = 0; i < title9.length; i++){
      giga2.push([data9[i].toString(), title9[i].toString()])
    }
    di9.push(data9)
    try{                           //                                     #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title10 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data10 = await page.$$";
      $txt13 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title10.length; i++){
          giga2.push([data10[i].toString(), title10[i].toString()])
      }
      di10.push(data10)
    }
    catch{
        var title10 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title11 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(11) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data11 = await page.$$";
      $txt14 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(11) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title11.length; i++){
          giga2.push([data11[i].toString(), title11[i].toString()])
      }
      di11.push(data11)
    }
    catch{
        var title11 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title12 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(12) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data12 = await page.$$"; 
      $txt15 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(12) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title12.length; i++){
          giga2.push([data12[i].toString(), title12[i].toString()])
      }
      di12.push(data12)
    }
    catch{
        var title12 = '0'
    }
    try{                           //                                     #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title13 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(13) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data13 = await page.$$";
      $txt16 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(13) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title13.length; i++){
          giga2.push([data13[i].toString(), title13[i].toString()])
          console.log(title13[i])
          ti13.push(title13[i], data13[i])
      }
      di13.push(data13)
    }
    catch{
        var title13 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title14 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(14) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data14 = await page.$$";
      $txt17 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(14) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title14.length; i++){
          giga2.push([data14[i].toString(), title14[i].toString()])
      }
      di14.push(data14)
    }
    catch{
        var title14 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title15 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(15) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data15 = await page.$$";
      $txt18 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(15) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title15.length; i++){
          giga2.push([data15[i].toString(), title15[i].toString()])
      }
      di15.push(data15)
    }
    catch{
        var title15 = '0'
    }
    try{                           //                                     #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title16 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(16) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data16 = await page.$$";
      $txt19 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(16) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title16.length; i++){
          giga2.push([data16[i].toString(), title16[i].toString()])
      }
      di16.push(data16)
    }
    catch{
        var title16 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title17 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(17) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data17 = await page.$$";
      $txt20 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(17) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title17.length; i++){
          giga2.push([data17[i].toString(), title17[i].toString()])
      }
      di17.push(data17)
    }
    catch{
        var title17 = '0'
    }
    try{//                                                                #react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(10) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(3) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span
      var title18 = await page.evaluate(() => Array.from(document.querySelectorAll('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(18) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(2) > div.css-1dbjc4n.r-18u37iz.r-1wtj0ep.r-1s2bzr4.r-1mdbhws > div:nth-child(1) > div > div > div.css-1dbjc4n.r-xoduu5.r-1udh08x > span > span'), element => element.textContent));
      var data18 = await page.$$";
      $txt21 = "eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(18) > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      for(i = 0; i < title18.length; i++){
          giga2.push([data18[i].toString(), title18[i].toString()])
      }
      di18.push(data18)
    }
    catch{
        var title18 = '0'
    }
    async function scroller(page) {
        totalHeight = (300 * r)
        var scrollHeight = await page.evaluate(() => (document.body.scrollHeight));
        console.log(scrollHeight + ' <-- height of page')
        console.log(totalHeight + '<-- scrolled height')
        await page.evaluate(() => (window.scrollBy(0, 300)));
        console.log('scrolled!')
        if(totalHeight >= (scrollHeight - 400)){
            console.log('At last YOOOOOOOYYY')
            fin += 1
        }
    }
    await scroller(page)
    if(fin > 0){
        console.log(giga2)
        /*srt2 = [...new Set(mega2)]
        console.log(srt2)*/
        let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
        console.log(findDuplicates(giga2)) // All duplicates
        rank = [...new Set(findDuplicates(giga2.map(a => a[0])))]// Unique duplicates
        r2 = giga2.map(a => a[0])
        for(i = 0; i < rank.length; i++){
            ter1 = r2.indexOf(rank[i])
            terra.push(giga2[ter1])
        }
        console.log(rank)
        console.log(rank.length)
        console.log(terra)
        console.log(terra.length)
        console.log(terra)
        for(t = 0; t < terra.length; t++){
            hyper.push(terra[t][1])
            if (hyper[t].indexOf('K') > -1){
              if (hyper[t].indexOf('.') > -1){
                  l2 = hyper[t].replace('.', '');
                  l3 = l2.replace('K', '00');
                  console.log(l3)
                  hyper2.push(l3)
                  dhyper.push([l3, terra[t][0]])
              }
              else{
                  l2 = hyper[t].replace('K', '000');
                  console.log(l2)
                  hyper2.push(l2)
                  dhyper.push([l2, terra[t][0]])
              }
            }
            else{
              console.log('no thousands')
              hyper2.push(hyper[t])
              dhyper.push([hyper[t], terra[t][0]])
            }
        }
        dhyper.sort((a,b) => b[0] - a[0]);
        rank9 = [...new Set(findDuplicates(dhyper.map(a => a[1])))]// Unique duplicates
        await page.waitForTimeout(2000)
        console.log(rank9)
        console.log(rank9.length)
        for(i = 0; i < 5; i++){
          await page.waitForTimeout(2000)
          fs.writeFile('ids.txt', rank9[i], (err) => {
              if (err)
                console.log('nevr gonn give you up');
              else {
                console.log('File written successfully');
                console.log('The written has the following contents:');
                console.log(fs.readFileSync('ids.txt', 'utf8'));
              }
          });
          dhyper2.push(dhyper[i][1])
          //await page.waitForTimeout(3000)
          console.log(dhyper2)
          console.log(dhyper2.length)
        }
    }
    else{
        console.log('not there!!!')
    }
  }
}
start()
";
fwrite($myfile, $txt3);
fwrite($myfile, $txt4);
fwrite($myfile, $txt5);
fwrite($myfile, $txt6);
fwrite($myfile, $txt7);
fwrite($myfile, $txt8);
fwrite($myfile, $txt9);
fwrite($myfile, $txt10);
fwrite($myfile, $txt11);
fwrite($myfile, $txt12);
fwrite($myfile, $txt13);
fwrite($myfile, $txt14);
fwrite($myfile, $txt15);
fwrite($myfile, $txt16);
fwrite($myfile, $txt17);
fwrite($myfile, $txt18);
fwrite($myfile, $txt19);
fwrite($myfile, $txt20);
fwrite($myfile, $txt21);
fclose($myfile);
sleep(2);
$cmd = "nohup node bob2.js";
$outputfile = "output.txt";
$pidfile = "pidfile.txt";
shell_exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));
function isRunning($pid){
  try{
      $result = shell_exec(sprintf("ps %d", $pidfile));
      if( count(preg_split("/\n/", $result)) > 2){
          return true;
      }
  }catch(Exception $e){}

  return false;
}

?>
<?php
//ignore_user_abort(true); <== use with caution, may load results form previous tests!
//ob_end_flush();
//ob_implicit_flush();
//echo("Hey Vsauce, Michael here90000!");
file_put_contents("ids.txt", "");
//$fh = fopen( "ids.txt", "w" );
//fclose($fh);
for($k = 0; $k < 150000; $k++){
    sleep(2);
    $myfile = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text = fgets($myfile);
    if(strlen( $text ) === 0){
    }
    else{
        $fullurl = $text;
        break;
    }
}
for($k2 = 0; $k2 < 20; $k2++){
    sleep(1);
    $myfile2 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text2 = fgets($myfile2);
    if( $text === $text2){
      echo("nope");
    }
    else{
        $fullurl2 = $text2;
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
            $fullurl3 = " ";
            break;
        }
        else{
        }
    }
    else{
        $fullurl3 = $text3;
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
            $fullurl4 = " ";
            break;
        }
        else{
        }
    }
    else{
        $fullurl4 = $text4;
        break;
    }
}
for($k5 = 0; $k5 < 20; $k5++){
    sleep(1);
    $myfile5 = fopen("ids.txt", "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text5 = fgets($myfile5);
    if( $text4 === $text5){
        if($k5 > 5){
            $fullurl5 = " ";
            break;
        }
        else{
        }
    }
    else{
        $fullurl5 = $text5;
        break;
    }
}
?>
<div class="flexbox-centering">
  <div><?=$handle?>'s top 5 most commented tweets from <?=$s2?> to <?=$e2?></div>
</div>
<div id="demo"></div>
<div id="demo2"></div>
<div id="demo3"></div>
<div id="demo4"></div>
<div id="demo5"></div>
<script>
const sleep = (delay) => new Promise((resolve) => setTimeout(resolve, delay))

const repeatedGreetings = async () => {
  var clone = 0;
  rank = [];
  var text = "";
  text += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text?>?ref_src=twsrc%5Etfw'></a></blockquote>";
  document.getElementById("demo").innerHTML = text;
  var text2 = "";
  text2 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text2?>?ref_src=twsrc%5Etfw'></a></blockquote>";
  document.getElementById("demo2").innerHTML = text2;
  try{
    var text3 = "";
    text3 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text3?>?ref_src=twsrc%5Etfw'></a></blockquote>";
    document.getElementById("demo3").innerHTML = text3;
  }
  catch{
    console.log("only two tweets(from JS)3")
  }
  try{
    var text4 = "";
    text4 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$fullurl4?>?ref_src=twsrc%5Etfw'></a></blockquote>";
    document.getElementById("demo4").innerHTML = text4;
  }
  catch{
    console.log("only two tweets(from JS)4")
  }
  try{
    var text5 = "";
    text5 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$fullurl5?>?ref_src=twsrc%5Etfw'></a></blockquote>";
    document.getElementById("demo5").innerHTML = text5;
  }
  catch{
    console.log("only two tweets(from JS)5")
  }
}
repeatedGreetings()
</script>
<?php
unlink("ids.txt");
echo("unlinked!!!!!!!!!!");
?>
</body>
</head>