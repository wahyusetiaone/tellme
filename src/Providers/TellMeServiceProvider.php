<?php

namespace Setone\TellMe;
use Illuminate\Support\ServiceProvider;

class TellMeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('tellme',function(){
            return new TellMe();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
