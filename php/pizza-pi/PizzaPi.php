<?php

class PizzaPi
{

    private const MIDDLE_DOUGH = 200;
    private const PER_PERSON_DOUGH = 20;
    private const SAUCE_PER_PIZZA = 125;
    private const NUMBER_OF_SLICES = 8;

    public function calculateDoughRequirement(int $pizzas, int $persons): int
    {
        return $pizzas * (($persons * self::PER_PERSON_DOUGH) + self::MIDDLE_DOUGH);;
    }

    public function calculateSauceRequirement(int $pizzas, int $can_volume): int|float
    {
        return $pizzas * self::SAUCE_PER_PIZZA / $can_volume;
    }

    public function calculateCheeseCubeCoverage(int $length, float $thickness, int $diameter): int
    {
        return floor($length**3 / ($thickness * pi() * $diameter));
    }

    public function calculateLeftOverSlices(int $pizzas, int $number_of_friends): int
    {
        return $pizzas * self::NUMBER_OF_SLICES % $number_of_friends;
    }
}

$pizza_pi = new PizzaPi();
$grams = $pizza_pi -> calculateDoughRequirement(4, 8);
$cans_to_buy = $pizza_pi -> calculateSauceRequirement(8, 250);
$cheese_coverage = $pizza_pi -> calculateCheeseCubeCoverage(25, 0.5, 30);
$total_leftover = $pizza_pi -> calculateLeftOverSlices(4, 3);
print($grams . "<br>");
print($cans_to_buy . "<br>");
print($cheese_coverage . "<br>");
print($total_leftover);