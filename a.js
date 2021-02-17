const puppeteer = require('puppeteer');
var n = 0;
var k = 162;
email = 'levr.media9@gmail.com'
password = 'Willink+4'
async function start() {
  const browser = await puppeteer.launch({
    args: [
      '--no-sandbox',
      '--window-position=0,0',
      '--user-agent="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36"'
      ]
  });  
  const page = await browser.newPage();
  console.log('hellloooo');
  try{
    await page.goto('https://www.instagram.com/funnymemes/followers/');  
  }  
  catch{
    console.log('network error')
  }
  await page.waitFor(3000);
  try{
    await page.click('body > div.RnEpo.Yx5HN > div > div > div > div.mt3GC > button.aOOlW.bIiDR')
  }
  catch{
    console.log('no cookies')
  }
  await page.waitFor(3000);
  await page.click('#loginForm > div > div:nth-child(1) > div > label > input')
  await page.keyboard.type(email)
  await page.waitFor(2000)
  await page.click('#loginForm > div > div:nth-child(2) > div > label > input')
  await page.keyboard.type(password)
  await page.waitFor(2000)
  await page.click('#loginForm > div > div:nth-child(3) > button > div')
  await page.waitFor(5000)
  var varlist = []
  let g = 0;
  let url = 0;
  for (var c = 0; c < 50; c++){
    urlist = ['https://www.instagram.com/memezar/followers/', 'https://www.instagram.com/jokezar/followers/', 'https://www.instagram.com/britishmemes/followers/', 'https://www.instagram.com/meme.ig/followers/', 'https://www.instagram.com/funnymemes/followers/', 'https://www.instagram.com/puberty/followers/', 'https://www.instagram.com/leavelaughing/followers/']
    let time = Math.floor(Math.random() * 1000 + 2000)
    let time3 = Math.floor(Math.random() * 8000 + 10000)
    let time2 = Math.floor(Math.random() * 80000 + 130000)
    let fnum = Math.floor(Math.random() * 4 + 6)
    let q = Math.floor(Math.random() * 2 + 1)
    console.log(q)
    await page.waitFor(time)
    if(url == 7){
      url = 0;
      await page.waitFor(time2)
      var s = urlist.sort(func);  
      function func() {  
        return 0.5 - Math.random();
      }  
      console.log(s);
    }
    else{
      console.log(url)
    }
    console.log(fnum)
    n = 0;
    await page.goto(urlist[url])
    console.log(urlist[url])
    await page.waitFor(time3)
    try{
      await page.click('#react-root > section > main > div > header > section > ul > li:nth-child(2) > a')
    }
    catch{
      console.log('follow list already displayed')
    }
    await page.waitFor(3000)
    const elements = await page.$x('/html/body/div[4]/div/div/div[2]/ul/div/li/div/div[2]/div[1]/div/div/span')
    try{
      await elements[0].click()        
    }   
    catch{
      let info = 'Finished loop early'
      console.log('\x1b[36m%s\x1b[0m', info);
      break;
    }
    k += 45;
    await page.waitFor(1000)
    try{
      const element = await page.waitForXPath("/html/body/div[1]/section/main/div/header/section/div[1]/h1");
      var name = await page.evaluate(element => element.textContent, element);
      console.log(name)    
    }
    catch{
      try{
        const element = await page.waitForXPath("/html/body/div[1]/section/main/div/header/section/div[1]/h2");
        var name = await page.evaluate(element => element.textContent, element);
        console.log(name)
      }
      catch{
        console.log('weird name')
      }
    }
    var i = varlist.indexOf(name)
    console.log(i)
    if(i > -1){
      console.log('already there')
    }
    else{
      try{
        await page.waitFor(1000)
        await page.click('#react-root > section > main > div > div._2z6nI > article > div > div > div > div:nth-child(1) > a > div.eLAPa')
        await page.waitFor(1000)
        await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')
        await page.waitFor(1000)
        await page.click('body > div._2dDPU.RnrQH.CkGkG > div.EfHg9 > div > div > a')
        await page.waitFor(1000)
        try{
          await page.click('body > div._2dDPU.RnrQH.CkGkG > div.zZYga > div > article > div.eo2As > section.ltpMr.Slqrh > span.fr66n > button > div > span > svg')      
        }
        catch{
          console.log('only one post')
        }
        try{
          await page.waitFor(1000)
          next = await page.waitForXPath('/html/body/div[4]/div[1]/div/div/a[2]')  
          await next.click()    
          await page.waitFor(1000)
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
        if(q <= 1){
          try{
              await page.waitFor(1000)
              next = await page.waitForXPath('/html/body/div[4]/div[1]/div/div/a[2]')  
              await next.click()    
              await page.waitFor(1000)
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
        else{
          console.log('\x1b[36m%s\x1b[0m', 'just liking three posts')
        }
      }
      catch{
        n = 1;
        console.log('private account')
      }
    }
    await page.waitFor(5000) 
    //varlist.push(name + '   ' + n + 'list value' + ' ' + i)
    varlist.push(name)
    console.log(varlist)
    url += 1;
  }

}
start();