<?php

namespace Alaaelsaid\LaravelRegexs\Providers;

use Illuminate\Support\ServiceProvider;
use Alaaelsaid\LaravelRegexs\Facade\RegexProcess;

class RegexServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('Regex', fn() => new RegexProcess());
    }
}
