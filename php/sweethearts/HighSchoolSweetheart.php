<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initial(string $name): string
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initials(string $name): string
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        throw new \BadFunctionCallException("Implement the function");
    }
}

$HSS = new HighSchoolSweetheart();
$fs = $HSS -> firstLetter("Jane");
print($fs . "<br>");
$fs = HighSchoolSweetheart::firstLetter("Jane");
print($fs . "<br>");