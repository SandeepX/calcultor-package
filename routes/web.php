<?php

use Illuminate\Support\Facades\Route;
use MrIncognito\LaravelCalculator\Controllers\CalculatorController;

Route::get('/add', [CalculatorController::class, 'add']);
Route::get('/subtract', [CalculatorController::class, 'subtract']);
Route::get('/multiply', [CalculatorController::class, 'multiply']);
Route::get('/divide', [CalculatorController::class, 'divide']);