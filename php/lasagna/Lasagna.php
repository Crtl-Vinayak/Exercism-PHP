<?php

declare(strict_types=1);

final class Lasagna
{

    // A constructor helps initialize variables
    // public function __construct(
    //     protected int $cookTime = 40,
    // ) {}

    private const EXPECTED_COOK_TIME = 40;
    private const MINUTES_PER_LAYER = 2;

    // Please define the 'expectedCookTime()' function
    public function expectedCookTime(): int 
    {
        return static::EXPECTED_COOK_TIME;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    public function remainingCookTime(int $elapsed_minutes): int
    {
        // Same as return ($this -> expectedCookTime() - $elapsed_minutes) ? ($this -> expectedCookTime() - $elapsed_minutes) : 0;
        // https://stackoverflow.com/questions/1993409/operator-the-elvis-operator-in-php
        return ($this -> expectedCookTime() - $elapsed_minutes) ?: 0;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    public function totalPreparationTime(int $layers_to_prep): int
    {
        return static::MINUTES_PER_LAYER * $layers_to_prep;
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes):int
    {
        return $this -> totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    // Please define the 'alarm()' function
    public function alarm():string
    {
        return "Ding!";
    }
}

// $timer = new Lasagna();
// $timer -> expectedCookTime();
// $timer -> remainingCookTime(30);
// $timer -> totalPreparationTime(2);
// $timer -> totalElapsedTime(3, 20);
// $timer -> alarm();