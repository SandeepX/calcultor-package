<?php

namespace MrIncognito\LaravelCalculator\Controllers;

use Illuminate\Http\Request;
use MrIncognito\LaravelCalculator\Facades\Calculator;

class CalculatorController extends Controller
{
    public function add(Request $request)
    {
        $result = Calculator::add($request->a, $request->b);
        return response()->json(['result' => $result]);
    }

    public function subtract(Request $request)
    {
        $result = Calculator::subtract($request->a, $request->b);
        return response()->json(['result' => $result]);
    }

    public function multiply(Request $request)
    {
        $result = Calculator::multiply($request->a, $request->b);
        return response()->json(['result' => $result]);
    }

    public function divide(Request $request)
    {
        try {
            $result = Calculator::divide($request->a, $request->b);
            return response()->json(['result' => $result]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}