/**
 * @name location_faker
 *
 * @desc Fake the location for the geolocation API used by the browsers
 *
 */
const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch({
    headless: false
  })
  const screenshotPath = 'location.png'
  const url = 'https://www.netflix.com'

  // Firstly, we need to override the permissions
  // so we don't have to click "Allow Location Access"
  const context = browser.defaultBrowserContext()
  await context.overridePermissions(url, ['geolocation'])

  const page = await browser.newPage()

  // whenever the location is requested, it will be set to our given lattitude, longitude
  await page.evaluateOnNewDocument(function () {
    page.setGeolocation({latitude:70000, longitude:9021})
    /*navigator.geolocation.getCurrentPosition = function (cb) {
      setTimeout(() => {
        cb({
          coords: {
            accuracy: 21,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            latitude: 0.62896,
            longitude: 77.3111303,
            speed: null
          }
        })
      }, 1000)*/
  })

  await page.goto(url, { waitUntil: 'networkidle2' })
  await page.waitFor(400000000)
  await page.screenshot({ path: screenshotPath })

  await browser.close()
})()
