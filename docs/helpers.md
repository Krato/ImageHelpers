## Helpers

This are our image helpers. You can use the method or call `imagehelper` and then the method. By default, `imagehelper` will be return a string if you printed on a view.

::: tip All the examples are using this source
[https://images.weserv.nl/?url=ory.weserv.nl/zebra.jpg](https://images.weserv.nl/?url=ory.weserv.nl/zebra.jpg)
:::



::: warning Keep attention
First integer parameter will be always the `width`.
:::

### Cache

```php
imagehelper($imageUrl);
```
![thumb](https://images.weserv.nl/?url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)


### Thumb

Creates a thumb from given image

**Keeping the aspect-ratio**
```php
thumb($imageUrl, 300, 300); // respect aspect-ratio

//or

imagehelper($imageUrl)->thumb(300, 300);
```
![thumb](https://images.weserv.nl/?w=300&h=300&t=fit&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)



**Without the aspect-ratio**
```php
thumb($imageUrl, 300, 300, true); // don't respect aspect-ratio

//or

imagehelper($imageUrl)->thumb(300, 300, true);
```
![thumb_force](https://images.weserv.nl/?w=300&h=300&t=absolute&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)


### Resize

Just resize the image maintaining the aspect-ratio.

Height parameter is optional.

```php
resize($imageUrl, 350, 350);
resize($imageUrl, 350);

//or

imagehelper($imageUrl)->resize(350, 350);
imagehelper($imageUrl)->resize(350);
```
![resize](https://images.weserv.nl/?w=350&h=350&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)


### Square

To create a square from given image

```php
square($imageUrl, 300);

//or

imagehelper($imageUrl)->square(300);
```
![square](https://images.weserv.nl/?t=square&w=300&h=300&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)

**Creating the square focusing in the main object**

```php
square($imageUrl, 300, true);

//or

imagehelper($imageUrl)->square(300, true);
```
![square_smart](https://images.weserv.nl/?t=square&w=300&h=300&a=attention&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)

### Crop

To create a square from given image.

**Parameters**: width, height, x and y.

```php
crop($imageUrl, 400, 400, 1200, 550)

//or

imagehelper($imageUrl)->crop(400, 400, 1200, 550);
```
![square](https://images.weserv.nl/?crop=400%2C+400%2C+1200%2C+550&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)


### Blur

To create a blurred image.

**Important**: Default value is `5`. Valid range from 1 to 100,
```php
blur($imageUrl)
blur($imageUrl, 15)

//or
//
imagehelper($imageUrl)->blur();
imagehelper($imageUrl)->blur(15);
```
![square](https://images.weserv.nl/?crop=400%2C+400%2C+1200%2C+550&blur=15&url=ssl%3Aimages.weserv.nl%2F%3Furl%3Dory.weserv.nl%2Fzebra.jpg)


