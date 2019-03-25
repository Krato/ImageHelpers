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
    "revision": "523ce835525955e078179a4fad961689"
  },
  {
    "url": "advanced.html",
    "revision": "f30c41f4515d8590e8acee7a31850fa5"
  },
  {
    "url": "assets/css/0.styles.d7f624cf.css",
    "revision": "5df295b0406a9ac0af7bee10005ce78f"
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
    "url": "assets/js/4.1e7d344b.js",
    "revision": "afcfc326dbb5280dab65343d46712c48"
  },
  {
    "url": "assets/js/5.017ffc4a.js",
    "revision": "bac5b4da833f0bcb4a5941bcae203325"
  },
  {
    "url": "assets/js/6.d04ea0af.js",
    "revision": "916d00004f945dc40e6e2bac0ec2b670"
  },
  {
    "url": "assets/js/app.0374ee13.js",
    "revision": "59837b5fb4f44a99a1760e3094f370ed"
  },
  {
    "url": "helpers.html",
    "revision": "6ff85a146edebc3c6454332e0029969d"
  },
  {
    "url": "index.html",
    "revision": "394aa8e642886c2c86fa6f6bcf06259e"
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
