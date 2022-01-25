<?php

namespace Alaaelsaid\LaravelRegexs\Providers;

use Illuminate\Support\ServiceProvider;
use Alaaelsaid\LaravelRegexs\Facade\RegexProcessActions;

class RegexServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('Regex', fn() => new RegexProcessActions());
    }
}
