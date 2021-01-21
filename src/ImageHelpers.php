<?php

namespace EricLagarda\ImageHelpers;

use Coderello\Proximage\Enums\Parameter;
use Coderello\Proximage\Enums\Parameter\CropAlignment;
use Coderello\Proximage\Enums\Parameter\Transformation;
use Mockery\Exception\BadMethodCallException;

class ImageHelpers
{
    /**
     * @var mixed
     */
    public $imageProxy;

    /**
     * @param $url
     */
    public function __construct($url)
    {
        $this->imageProxy = proximage($url);
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            $this->{$name}($arguments);
        }

        $constantName = Parameter::class.'::'.strtoupper(snake_case($name));

        if (!defined($constantName)) {
            throw new BadMethodCallException(
                sprintf(
                    'Call to undefined method %s::%s()',
                    get_class($this),
                    $name
                )
            );
        }

        $this->imageProxy->parameter(
            constant($constantName),
            $arguments[0] ?? null
        );

        return $this;
    }

    /**
     * @param $url
     * @param $width
     * @param $height
     * @param $forceFull
     */
    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    public function thumb($width, $height, $forceFull = false)
    {
        if ($forceFull == false) {
            $this->imageProxy
                ->width($width)
                ->height($height)
                ->transformation(Transformation::FIT);
        } else {
            $this->imageProxy
                ->width($width)
                ->height($height)
                ->transformation(Transformation::ABSOLUTE);
        }

        return $this;
    }

    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    /**
     * @param $url
     * @param $width
     */
    public function resize($width, $height = null)
    {
        $this->imageProxy->width($width);

        if ($height) {
            $this->imageProxy->height($height);
        }

        return $this;
    }

    /**
     * Square
     *
     * @param   [type]  $url    [description]
     * @param   [type]  $width  [description]
     *
     * @return  [type]          [description]
     */
    /**
     * @param $url
     * @param $width
     * @param $height
     */
    public function square($width, $smart = false)
    {
        $this->imageProxy
            ->transformation(Transformation::SQUARE)
            ->width($width)
            ->height($width);

        if ($smart) {
            $this->imageProxy
                ->cropAlignment(CropAlignment::ATTENTION);
        }

        return $this;
    }

    /**
     * Crop
     *
     * @param   [type]  $width   [description]
     * @param   [type]  $height  [description]
     * @param   [type]  $x       [description]
     * @param   [type]  $y       [description]
     *
     * @return  [type]           [description]
     */
    public function crop($width, $height, $x, $y)
    {
        $this->imageProxy
            ->crop(''.$width.', '.$height.', '.$x.', '.$y.'');

        return $this;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function blur($value = 5)
    {
        $this->imageProxy->blur($value);

        return $this;
    }

    public function get()
    {
        return (string) $this->imageProxy->get();
    }

    /**
     * @param $value
     * @return mixed
     */
    public function interlace()
    {
        $this->imageProxy->interlace(true);

        return $this;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function progressive()
    {
        $this->imageProxy->interlace(true);

        return $this;
    }
    
    /**
     * @param $value
     * @return mixed
     */
    public function default($url)
    {
        $this->imageProxy->parameter('default', $url);

        return $this;
    }

    /**
     * Convert object to string.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->imageProxy->get();
    }
}
