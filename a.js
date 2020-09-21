const puppeteer = require('puppeteer')
console.log('dude')
async function start () {
  const url = 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean'
  const browser = await puppeteer.launch({
    args: ['--no-sandbox'],
    headless: false
  })
  const page = await browser.newPage()
  page.setDefaultNavigationTimeout(0)
  await page.goto(url)
  await page.setViewport({ width: 1100, height: 700 })
  await page.keyboard.type(' ')
  await page.waitFor(5000)
  await page.close()
  browser.close()
}
start()
