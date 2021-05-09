const puppeteer = require('puppeteer');
const fs = require('fs');
var z = 0;
var x = Math.floor(Math.random() * 6000 + 105000);
var j = 86400000 / (v) - x;
/*var year = 2021;
var month = 4;
var date = 6;
var year2 = 2021;
var month2 = 4;
var date2 = 5;*/
var getDaysArray = function(start, end) {
    for(var arr=[],dt=new Date(start); dt<=end; dt.setDate(dt.getDate()+1)){
        arr.push(new Date(dt));
    }
    return arr;
};
arr2 = []
var daylist = getDaysArray(new Date('2021-04-01'),new Date('2021-04-11'));
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
    headless: false,
    args: ['--no-sandbox',
    '--user-agent="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36"']
  });
  const page = await browser.newPage()
  //let body = await page.evaluate(() => document.body.innerHTML)
  await page.setViewport({ width: 700, height: 1200})
  idstream = []
  await page.goto(preurl)
  //let han = '@benshapiro'
  let someVar = 'Abenshapiro'
  console.log(someVar);
  const url = 'https://twitter.com/search?q=(from%3' + someVar + ')%20until%3A2021-04-11%20since%3A2021-03-01%20-filter%3Areplies&src=typed_query&f=live';
  //           https://twitter.com/search?q=(from%3Amnikonor)%20until%3A2021-04-11%20since%3A2021-04-01%20-filter%3Areplies&src=typed_query&f=live
  await page.goto(url)
  await page.waitForTimeout(5000);
  for(f = 1; f < 17; f++){
      var data = await page.$$eval('#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(' + f + ') > div > div > article > div > div > div > div.css-1dbjc4n.r-18u37iz > div.css-1dbjc4n.r-1iusvr4.r-16y2uox.r-1777fci.r-kzbkwu > div:nth-child(1) > div > div.css-1dbjc4n.r-k4xj1c.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1d09ksm.r-18u37iz.r-1wbh5a2 > a', data => data.map(uri => uri.getAttribute('href')))
      let element = await page.waitForXPath('/html/body/div/div/div/div[2]/main/div/div/div/div/div/div[2]/div/div/section/div/div/div[' + f + ']/div/div/article/div/div/div/div[2]/div[2]/div[2]/div[3]/div[3]/div/div/div[2]/span/span', { timeout: 1500 });
      //                                     /html/body/div[1]/div/div/div[2]/main/div/div/div/div/div/div[2]/div/div/section/div/div/div[8]/div/div/article/div/div/div/div[2]/div[2]/div[2]/div[3]/div[3]/div/div/div[2]/span/span
      //                                     /html/body/div[1]/div/div/div[2]/main/div/div/div/div/div/div[2]/div/div/section/div/div/div[8]/div/div/article/div/div/div/div[2]/div[2]/div[2]/div[3]/div[3]/div/div/div[2]/span/span
      //                                  
      var like = await page.evaluate(element => element.textContent, element);
      data2 = String(data)
      if (like.indexOf('K') > -1){
          if (like.indexOf('.') > -1){
              like2 = like.replace('.', '');
              like3 = like2.replace('K', '00');
              var combo = [like3, data2]
          }
          else{
              like2 = like.replace('K', '000');
              var combo = [like2, data2]
          }
      }
      else{
          console.log('no thousands')
          var combo = [like, data2]
      }
      rank.push(combo)
      rank.sort((a,b) => b[0] - a[0]);
      console.log('The individual posts:')
      console.log(rank);
        //let el2 = element;//               /html/body/div/div/div/div[2]/main/div/div/div/div/div/div[2]/div/div/section/div/div/div[15]/div/div/article/div/div/div/div[2]/div[2]/div[2]/div[4]/div[3]/div/div/div[2]/span/span
        //                                   /html/body/div/div/div/div[2]/main/div/div/div/div/div/div[2]/div/div/section/div/div/div[3]/div/div/article/div/div/div/div[2]/div[2]/div[2]/div[3]/div[3]/div/div/div[2]/span/span
      /*data2 = String(data)
      var combo = [like, data2]
      rank.push(combo)
      rank.sort((a,b) => b[0] - a[0]);
      console.log(rank);
      await page.waitFor(3000)*/
      await page.waitForTimeout(1000)
  }  
  rlen = rank.length
  console.log(rlen + ' This is bob')
  for(i = 0; i < rlen; i++){
      await page.waitForTimeout(2000)
      fs.writeFile('ids.txt', rank[i][1], (err) => {
          if (err)
            console.log('nevr gonn give you up');
          else {
            console.log('File written successfully');
            console.log('The written has the following contents:');
            console.log(fs.readFileSync('ids.txt', 'utf8'));
          }
      });
      //await page.waitForTimeout(3000)
  }

}
start()