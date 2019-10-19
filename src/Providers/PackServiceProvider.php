<?php

namespace pack\pack\Providers;

use Illuminate\Support\ServiceProvider;

Class PackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("we are loading our pack");
    }

    public function register()
    {

    }
}
