<?php

namespace Farmers-friend\Classify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Farmers-friend\Classify\Classify
 */
class ClassifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'classify';
    }
}
