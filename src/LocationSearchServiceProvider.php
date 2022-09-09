<?php


use Illuminate\Support\ServiceProvider;

/**
 * Class LocationSearchServiceProvider
 */
class LocationSearchServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('location', Location::class);
    }
}
