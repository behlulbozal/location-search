<?php


use Illuminate\Support\ServiceProvider;

/**
 * Class LocationServiceProvider
 */
class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('locationSearch', Location::class);
    }
}
