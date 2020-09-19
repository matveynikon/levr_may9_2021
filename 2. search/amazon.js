/**
 * @name Amazon search
 *
 * @desc Looks for a "nyan cat pullover" on amazon.com, goes two page two clicks the third one.
 */
const puppeteer = require('puppeteer')
try {
  (async () => {
    const browser = await puppeteer.launch()
    const page = await browser.newPage()
    await page.setViewport({ width: 1280, height: 800 })
    await page.goto('https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
}
catch{
   console.log("no");
}
