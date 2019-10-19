<?php

namespace arasu1997\pack\Providers;

use Illuminate\Support\ServiceProvider;

Class PackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("we are loading our arasu1997");
    }

    public function register()
    {

    }
}
