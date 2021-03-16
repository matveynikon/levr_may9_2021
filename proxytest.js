email = 'levr.media9@gmail.com'
password = 'Willink+6' 
async function start() {
  console.log('hello everybody my name is markiplier and today...')
  const puppeteer = require('puppeteer');
  var n = 0;
  var k = 162;
  const browser = await puppeteer.launch({
    args: [
      '--no-sandbox',
      '--window-position=0,0',
      '--user-agent=Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36',
      '--proxy=http://81.242.175.245'
      ]
  });
  const page = await browser.newPage();
  await page.goto('https://www.whatismyip.com/')
  const element = await page.waitForXPath("/html/body/div[2]/div[2]/div/div/div/main/article/div[1]/div/div[1]/div/div/ul/li[2]/div/a");
  var name = await page.evaluate(element => element.textContent, element);
  console.log(name)    
}  
start()