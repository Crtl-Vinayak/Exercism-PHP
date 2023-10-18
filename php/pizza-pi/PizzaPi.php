<?php

class PizzaPi
{

    public $SAUCE_PER_PIZZA = 125;
    public $NUMBER_OF_SLICES = 8;

    public function calculateDoughRequirement(int $pizzas, int $persons): int
    {
        $grams = $pizzas * (($persons * 20) + 200);
        return $grams;
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateSauceRequirement(int $pizzas, int $can_volume)
    {
        return $pizzas * $this->SAUCE_PER_PIZZA / $can_volume;
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateCheeseCubeCoverage(int $length, float $thickness, int $diameter)
    {
        return floor($length**3 / ($thickness * pi() * $diameter));
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateLeftOverSlices(int $pizzas, int $number_of_friends)
    {
        return fmod($pizzas * $this->NUMBER_OF_SLICES, $number_of_friends);
        throw new \BadFunctionCallException("Implement the function");
    }
}

$pizza_pi = new PizzaPi();
$grams = $pizza_pi -> calculateDoughRequirement(4, 8);
$cans_to_buy = $pizza_pi -> calculateSauceRequirement(8, 250);
$cheese_coverage = $pizza_pi -> calculateCheeseCubeCoverage(25, 0.5, 30);
$total_leftover = $pizza_pi -> calculateLeftOverSlices(2, 4);
print($grams . "<br>");
print($cans_to_buy . "<br>");
print($cheese_coverage . "<br>");
print($total_leftover . "<br>");