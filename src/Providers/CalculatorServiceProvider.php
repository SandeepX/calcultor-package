<?php

namespace MrIncognito\LaravelCalculator\Providers;

use Illuminate\Support\ServiceProvider;
use MrIncognito\LaravelCalculator\Services\CalculatorService;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('calculator', function ($app) {
            return new CalculatorService();
        });
    }

    public function boot()
    {
        // Optional: Load routes, views, etc.
    }
}