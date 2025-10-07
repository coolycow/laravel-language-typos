<?php

namespace Coolycow\LaravelLanguageTypos;

use Illuminate\Support\ServiceProvider;

class LanguageTyposServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('language-typos', function () {
            return new LanguageTypos();
        });
    }

    public function boot(): void
    {
        //
    }
}