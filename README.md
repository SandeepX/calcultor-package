# Laravel Calculator Service

A simple calculator service for Laravel applications that provides basic arithmetic operations such as addition, subtraction, multiplication, and division.

## Installation

Follow the steps below to install the `mr.incognito/laravel-calculator` package into your Laravel application.

### 1. Install via Composer

Run the following command to add the package to your Laravel project:

`composer require mr.incognito/laravel-calculator`


## Usage
Once installed, you can begin using the CalculatorService in your Laravel application.

### 1. Addition
`$result = $calculator::add(5, 10); output 15`

### 2. subtraction
`$result = $calculator::subtract(10, 10); output 0`

### 3. multpilication
`$result = $calculator::subtract(5, 10); output 50`

### 4. divide
`$result = $calculator::subtract(10, 5); output 2`

### Alternatively, you can resolve the CalculatorService directly from the service container:

`$calculator = app(MrIncognito\LaravelCalculator\Services\CalculatorService::class);
 $result = $calculator->add(5, 10); // Returns 15`

## License
This package is open-sourced software licensed under the MIT license.


