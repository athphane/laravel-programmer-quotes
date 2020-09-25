<?php

namespace Athphane\ProgrammerQuotes;

use Illuminate\Support\ServiceProvider;

class ProgrammerQuotesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Do magic here
    }

    public function register()
    {
        $this->app->singleton(ProgrammerQuotes::class, function () {
            return new ProgrammerQuotes();
        });
    }
}
