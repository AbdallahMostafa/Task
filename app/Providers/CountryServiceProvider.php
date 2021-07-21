<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CountryRegxInterface;
use App\Country;

class CountryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CountryRegxInterface::class, Country::class);

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
