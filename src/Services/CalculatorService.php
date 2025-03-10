<?php

namespace MrIncognito\LaravelCalculator\Services;

class CalculatorService
{
    /**
     * @param $b
     * @return mixed
     */
    public function add($a, $b): mixed
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function subtract($a, $b): mixed
    {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function multiply($a, $b): float|int
    {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function divide($a, $b): float|int
    {
        if ($b === 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
}