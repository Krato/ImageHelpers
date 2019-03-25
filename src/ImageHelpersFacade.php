<?php

namespace EricLagarda\ImageHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EricLagarda\ImageHelpers\Skeleton\SkeletonClass
 */
class ImageHelpersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'image-helpers';
    }
}
