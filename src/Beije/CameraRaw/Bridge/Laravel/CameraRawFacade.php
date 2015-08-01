<?php

namespace Beije\CameraRaw\Bridge\Laravel;

use Illuminate\Support\Facades\Facade;

class CameraRawFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'cameraraw';
    }
}
