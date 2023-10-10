<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, int $persons): int
    {
        $grams = $pizzas * (($persons * 20) + 200);
        return $grams;
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateSauceRequirement()
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateCheeseCubeCoverage()
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateLeftOverSlices()
    {
        throw new \BadFunctionCallException("Implement the function");
    }
}

