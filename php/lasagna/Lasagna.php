<?php

declare(strict_types=1);

class Lasagna
{

    public function __construct(
        protected int $cookTime = 40,
    ) {}

    // Please define the 'expectedCookTime()' function
    function expectedCookTime(): int 
    {
        return $this->cookTime;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    function remainingCookTime(int $elapsed_minutes): int
    {
        return $this -> expectedCookTime() - $elapsed_minutes;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    function totalPreparationTime(int $layers_to_prep): int
    {
        return 2 * $layers_to_prep;
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes):int
    {
        return $this -> totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    // Please define the 'alarm()' function
    function alarm():string
    {
        return "Ding!";
    }
}

$timer = new Lasagna();
$timer -> expectedCookTime();
$timer -> remainingCookTime(30);
$timer -> totalPreparationTime(2);
$timer -> totalElapsedTime(3, 20);
$timer -> alarm();