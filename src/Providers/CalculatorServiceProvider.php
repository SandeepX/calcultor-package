<?php

namespace MrIncognito\LaravelCalculator\Providers;

use Illuminate\Support\ServiceProvider;
use MrIncognito\LaravelCalculator\Services\CalculatorService;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('calculator', function ($app) {
            return new CalculatorService();
        });
    }

    public function boot()
    {
        // Register the calculator facade
    }
}