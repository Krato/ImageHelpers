/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js");

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "404.html",
    "revision": "0266a7e72d6927a92b21a2bf5f50fe6d"
  },
  {
    "url": "advanced.html",
    "revision": "5b417ed655c428cf7c475c8f2a01a0cd"
  },
  {
    "url": "assets/css/0.styles.a9ec539d.css",
    "revision": "6d01ef37eba84673b17b51bba1dcb401"
  },
  {
    "url": "assets/img/search.83621669.svg",
    "revision": "83621669651b9a3d4bf64d1a670ad856"
  },
  {
    "url": "assets/js/2.84817a29.js",
    "revision": "88a50d356832a4aee33f105c016fe614"
  },
  {
    "url": "assets/js/3.f35a1861.js",
    "revision": "60576af76e8d5193c362cf74a49e029d"
  },
  {
    "url": "assets/js/4.51e02491.js",
    "revision": "030b1e4caaa21055f6666aaf9d78daca"
  },
  {
    "url": "assets/js/5.f3c46a0c.js",
    "revision": "4316222db95929bc5c059b5211dddb80"
  },
  {
    "url": "assets/js/6.d04ea0af.js",
    "revision": "916d00004f945dc40e6e2bac0ec2b670"
  },
  {
    "url": "assets/js/app.342c17f8.js",
    "revision": "d1eee498de85fa61f9cec1f45397bc4e"
  },
  {
    "url": "helpers.html",
    "revision": "23e21a38ca4fbd6a48b6f77e4c2b345e"
  },
  {
    "url": "index.html",
    "revision": "0da9cd38c7d57bdcfe5dbe6166d1c435"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.suppressWarnings();
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});
addEventListener('message', event => {
  const replyPort = event.ports[0]
  const message = event.data
  if (replyPort && message && message.type === 'skip-waiting') {
    event.waitUntil(
      self.skipWaiting().then(
        () => replyPort.postMessage({ error: null }),
        error => replyPort.postMessage({ error })
      )
    )
  }
})
