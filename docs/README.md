# ImageHelpers


## Installation

To install the package just run:

```bash
 composer require ericlagarda/image-helpers
```


Then, you can use the facade or the helper.

Example with facade:

```php
use ImageHelpers;

$image = new ImageHelpers($imageUrl);

$image->thumb(400, 400);
```

Example with the helper:

```php
imagehelper($imageUrl)->thumb(400, 400);
```

::: tip Cache
Once you load the image with the facade or the helper, this image fill be cached.
:::



This package is based on [laravel-proximage](https://github.com/coderello/laravel-proximage) by coderello. You can use any of the methods of laravel-proximage.

Proximage is a handy package for proxying images through the [images.weserv.nl](https://images.weserv.nl) (free image cache & resize service) with which you can greatly increase the performance of the site.


But we have built some other helpers for you.

