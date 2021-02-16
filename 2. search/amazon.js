const puppeteer = require('puppeteer');
var k = 1;
var z = 0;
var v = 2000;
var x = Math.floor(Math.random() * 6000 + 105000);
var j = 86400000 / (v) - x;
var l = x / 14000;
var k = 1;
async function start() {
  const url = 'https://www.netflix.com';
  const browser = await puppeteer.launch({
      args: ['--no-sandbox'],
      headless: false
  });
  for(var g = 3000; g > 0; g--){
    const page = await browser.newPage();
    page.setDefaultNavigationTimeout(0);
    await page.setGeolocation({latitude:700, longitude:9021})
    await page.goto(url);
    await page.setViewport({ width: 1000, height: 700});
    await page.waitFor(5000000);
  }
}
start();
