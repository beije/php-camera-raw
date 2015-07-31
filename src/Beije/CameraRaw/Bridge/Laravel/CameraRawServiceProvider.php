<?php

namespace Beije\CameraRaw\Bridge\Laravel;

use Beije\CameraRaw\CameraRaw;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class CameraRawServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('cameraraw', function () {
            return new CameraRaw();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return array('cameraraw');
    }
}
