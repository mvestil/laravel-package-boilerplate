<?php

namespace Mvestil\Pany;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mvestil\Pany\Skeleton\SkeletonClass
 */
class PanyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pany';
    }
}
