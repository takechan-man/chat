<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PresenterServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repository\Chat\ChatPresenterInterface::class, \App\Repository\Chat\ChatPresenter::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
