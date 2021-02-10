const puppeteer = require('puppeteer');
var n = 0;
var k = 162;
async function start() {
  const browser = await puppeteer.launch({
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-infobars',
      '--window-position=0,0',
      '--ignore-certifcate-errors',
      '--ignore-certifcate-errors-spki-list',
      '--user-agent="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3312.0 Safari/537.36"'
      ]
  });  
  const page = await browser.newPage();
  console.log('hellloooo');
  await page.goto('https://www.instagram.com/funnymemes/followers/');    
  await page.waitFor(3000);
  try{
    await page.click('body > div.RnEpo.Yx5HN > div > div > div > div.mt3GC > button.aOOlW.bIiDR')
  }
  catch{
    console.log('no cookies')
  }
  await page.waitFor(3000);
  await page.click('#loginForm > div > div:nth-child(1) > div > label > input')
  await page.keyboard.type('levr.media9@gmail.com')
  await page.waitFor(2000)
  //#loginForm > div > div:nth-child(2) > div > label > input
  await page.click('#loginForm > div > div:nth-child(2) > div > label > input')
  await page.keyboard.type('GOGGINS_2')
  await page.waitFor(2000)
  //#loginForm > div > div:nth-child(3) > button > div
  await page.click('#loginForm > div > div:nth-child(3) > button > div')
  await page.waitFor(5000)
  /*var v1;
  var v2;
  var v3;
  var v4;
  var v5;
  var v6;
  var v7;
  var v8;
  var v9;
  var v10;*/
  var varlist = []
  let g = 0;
  let url = 0;
  for (var c = 0; c < 50; c++){
    urlist = ['https://www.instagram.com/hb_dawgs/followers/', 'https://www.instagram.com/onlysarcasm.ig/followers/', 'https://www.instagram.com/amateurbantermemes/followers/', 'https://www.instagram.com/yizzerk/followers/', 'https://www.instagram.com/thememelogistics/followers/', 'https://www.instagram.com/legendarymemeguyyy/followers/', 'https://www.instagram.com/meemchamber/followers/', 'https://www.instagram.com/justthings05/followers/', 'https://www.instagram.com/mcmemes22/followers/', 'https://www.instagram.com/imjustlivinmemes/followers/', 'https://www.instagram.com/lordmemerhere/followers/', 'https://www.instagram.com/memesac.2/followers/', 'https://www.instagram.com/meme_monkey_420/followers/', 'https://www.instagram.com/justthings05/followers/', 'https://www.instagram.com/ohmyrickk/followers/', 'https://www.instagram.com/pubity_comedy/followers/', 'https://www.instagram.com/godssmemess/followers/', 'https://www.instagram.com/vabeif/followers/',
    'https://www.instagram.com/issamemelover/followers/', 'https://www.instagram.com/staywithmecrox/followers/', 'https://www.instagram.com/memes_4yaall/followers/', 'https://www.instagram.com/drunken.fruit.fly/followers/', 'https://www.instagram.com/memehxstler/followers/', 'https://www.instagram.com/dogeoncrack/followers/', 'https://www.instagram.com/instant.memz/followers/', 'https://www.instagram.com/ultrameems/followers/', 'https://www.instagram.com/i.shidded.my.pants/followers/', 'https://www.instagram.com/fuckkcomedy/followers/', 'https://www.instagram.com/toiletmemes33/followers/', 'https://www.instagram.com/spongedome/followers/', 'https://www.instagram.com/siiiiiiick/followers/', 'https://www.instagram.com/saucynade/followers/', 'https://www.instagram.com/memestochill/followers/',
    'https://www.instagram.com/dankgary/followers/', 'https://www.instagram.com/ofhensive/followers/', 'https://www.instagram.com/kurxie/followers/', 'https://www.instagram.com/awkwardiety/followers/', 'https://www.instagram.com/basictor/followers/', 'https://www.instagram.com/memestochill/followers/', 'https://www.instagram.com/heavy.pdf/followers/']
    //urlist = ['']
    //console.log(urlist.length)
    let time = Math.floor(Math.random() * 140000 + 210000)
    await page.waitFor(time)
    if(url == 39){
      url = 0;
    }
    else{
      console.log(url)
    }
    for (var z = 0; z < 8; z++){
      n = 0;
      await page.goto(urlist[url])
      console.log(urlist[url])
      await page.waitFor(2000)
      try{
        await page.click('#react-root > section > main > div > header > section > ul > li:nth-child(2) > a')
      }
      catch{
        console.log('follow list already displayed')
      }
      //#f24050daec6c098 > div > div > span > a
      /*if(g == 0){
        await page.waitFor(5000);
        await page.mouse.click(410, 500)
        await page.mouse.down(410, 500)
        await page.mouse.move(410, 600)
        await page.mouse.down(410, 600)
        let g = 0;
      }
      g += 1;*/
      await page.waitFor(8000)
      //await page.click('body > div.RnEpo.Yx5HN > div > div > div.isgrP > ul > div > li:nth-child(1) > div > div.Igw0E.IwRSH.eGOV_._4EzTm.yC0tu > div > div > a > img')
      //await page.mouse.click(295, k)
      const elements = await page.$x('/html/body/div[4]/div/div/div[2]/ul/div/li/div/div[2]/div[1]/div/div/span')
      ///html/body/div[4]/div/div/div[2]/ul/div/li[7]/div/div[1]/div[2]/div[1]/span
      ///html/body/div[4]/div/div/div[2]/ul/div/li[2]/div/div[2]/div[1]/div/div/span
      try{
        await elements[z].click()        
      }   
      catch{
        let info = 'Finished loop early'
        console.log('\x1b[36m%s\x1b[0m', info);
        break;
      }
      //await page.click('body > div.RnEpo.Yx5HN > div > div > div.isgrP > ul > div > li:nth-child(2) > div > div.Igw0E.IwRSH.eGOV_._4EzTm.yC0tu > div > div > span')
      k += 45;
      await page.waitFor(1000)
      try{
        const element = await page.waitForXPath("/html/body/div[1]/section/main/div/header/section/div[1]/h1");
        var name = await page.evaluate(element => element.textContent, element);
        console.log(name)    
      }
      catch{
        const element = await page.waitForXPath("/html/body/div[1]/section/main/div/header/section/div[1]/h2");
        var name = await page.evaluate(element => element.textContent, element);
        console.log(name)
      }
      var i = (varlist.indexOf(name));
      console.log(i)
      if(i > -1){
          console.log('already there')
      }
      else{
        try{
          await page.waitFor(3000)
          await page.click('#react-root > section > main > div > div._2z6nI > article > div > div > div > div:nth-child(1) > a > div.eLAPa')
          await page.waitFor(5000)
          await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')
          await page.waitFor(3000)
          await page.click('body > div._2dDPU.RnrQH.CkGkG > div.EfHg9 > div > div > a')
          await page.waitFor(4000)
          try{
            await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')      
          }
          catch{
            console.log('only one post')
          }
          try{
            await page.waitFor(2000)
            next = await page.waitForXPath('/html/body/div[4]/div[1]/div/div/a[2]')  
            await next.click()    
            await page.waitFor(4000)
            try{
                await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')      
            }
            catch{
              console.log('only two posts')
            }                    
          }
          catch{
            console.log('only two posts')
          }
          try{
            await page.waitFor(2000)
            next = await page.waitForXPath('/html/body/div[4]/div[1]/div/div/a[2]')  
            await next.click()    
            await page.waitFor(4000)
            try{
              await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')      
            }
            catch{
              console.log('only three posts')
            }                    
          }
          catch{
            console.log('only three posts')
          }
        }
        catch{
          n = 1;
          console.log('private account')
        }
      }
      await page.waitFor(2000)  
      //var array = [text, text, text, text, text]
      varlist.push(name + '   ' + n + 'list value' + ' ' + i)
      console.log(varlist)
    }
    url += 1;
  }

}
start();