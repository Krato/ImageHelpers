<?php

use Coderello\Proximage\Enums\Parameter\CropAlignment;
use Coderello\Proximage\Enums\Parameter\Transformation;
use EricLagarda\ImageHelpers\ImageHelpers;

// ->output(Output::WEBP)

if (!function_exists('imagehelper')) {
    /**
     * Cache the image on server
     *
     * @param  string  $imageUrl
     * @return string
     */
    function imagehelper(string $imageUrl)
    {
        return new ImageHelpers($imageUrl);
    }
}

if (!function_exists('imagecache')) {
    /**
     * Cache the image on server
     *
     * @param  string  $imageUrl
     * @return string
     */
    function imagecache(string $imageUrl)
    {
        return imagehelper($imageUrl)->get();
    }
}

if (!function_exists('thumb')) {
    /**
     * @param String $url
     * @param Integer $width
     * @param Integer $height
     */
    function thumb($url, $width, $height, $forceFull = false)
    {
        return imagehelper($url)
            ->thumb($width, $height, $forceFull)->get();
    }
}

if (!function_exists('resize')) {
    /**
     * @param String $url
     * @param Integer $width
     * @param Integer $height
     */
    function resize($url, $width, $height = null)
    {
        $url = proximage($url)
            ->width($width);

        if ($height) {
            $url->height($height);
        }

        return (string) $url;
    }
}

if (!function_exists('square')) {
    /**
     * @param String $url
     * @param Integer $width
     * @param Integer $height
     */
    function square($url, $width, $smart = false)
    {
        $url = proximage($url)
            ->transformation(Transformation::SQUARE)
            ->width($width)
            ->height($width);

        if ($smart) {
            $url->cropAlignment(CropAlignment::ATTENTION);
        }

        return (string) $url;
    }
}

if (!function_exists('crop')) {
    /**
     * @param String $url
     * @param Integer $width
     * @param Integer $height
     * @param Integer $x
     * @param Integer $y
     */
    function crop($url, $width, $height, $x, $y)
    {
        $url = proximage($url)
            ->crop(''.$width.', '.$height.', '.$x.', '.$y.'')
            ->get();

        return (string) $url;
    }
}

if (!function_exists('blur')) {
    /**
     * @param String $url
     * @param Integer $width
     * @param Integer $height
     */
    function blur($url, $value = 5)
    {
        return imagehelper($url)
            ->blur($value)->get();
    }
}
