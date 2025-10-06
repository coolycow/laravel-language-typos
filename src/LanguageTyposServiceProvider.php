<?php

namespace Coolycow\LanguageTypos;

class LanguageTyposServiceProvider
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