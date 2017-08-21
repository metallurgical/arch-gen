<?php

namespace Arch\Gen;

use Illuminate\Support\ServiceProvider;

class LaragenDBServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Arch\Gen\LaragenDBController');
    }
}
