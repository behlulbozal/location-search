<?php

namespace Providers;
use Illuminate\Support\ServiceProvider;

/**
 * Class Service
 */
class Service extends ServiceProvider
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
