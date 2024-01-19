<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Director;
use View;

class DirectorsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $countrys = Director::pluck('nationality')->unique();
        View::share('countrys', $countrys);
    }
}
