module.exports = {
  title: 'ImageHelpers',
  description: 'Documentation for ImageHelpers package for Laravel',
  base: '/<publication-repo-name>/',
  serviceWorker: true,
  themeConfig: {
  	nav: [
      { text: 'Home', link: '/' },
      { text: 'Infinety', link: 'https://infinety.es' },
      { text: 'Eric Lagarda', link: 'https://ericlagarda.com' },
    ],
    sidebar: [
      ['/', 'Introduction'],
      ['/helpers', 'Helpers'],
      ['/advanced', 'Advanced use']
    ],
    sidebarDepth: 0,
    lastUpdated: 'Last Updated',
    serviceWorker: {
      updatePopup: true
    }
  }
}