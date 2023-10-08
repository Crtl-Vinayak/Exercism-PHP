<?php

declare(strict_types=1);

class Lasagna
{
    // Please define the 'expectedCookTime()' function
    function expectedCookTime() {
        return 40;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    function remainingCookTime($elapsed_minutes) {
        return Lasagna::expectedCookTime() - $elapsed_minutes;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    function totalPreparationTime($layers_to_prep) {
        return 2 * $layers_to_prep;
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    function totalElapsedTime($layers_to_prep, $elapsed_minutes) {
        return Lasagna::totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    // Please define the 'alarm()' function
    function alarm() {
        return "Ding!";
    }
}

$timer = new Lasagna();
$timer -> expectedCookTime();
$timer -> remainingCookTime(30);
$timer -> totalPreparationTime(2);
$timer -> totalElapsedTime(3, 20);
$timer -> alarm();