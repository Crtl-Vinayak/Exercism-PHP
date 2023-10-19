<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return $name[0];
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initial(string $name): string
    {
        return strtoupper(HighSchoolSweetheart::firstLetter($name)) . ".";
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initials(string $name): string
    {
        $str = "";
        $words = explode(" ", $name);
        for($i = 0; $i < count($words); $i++) {
            if($i == count($words) - 1) {
                $str .= HighSchoolSweetheart::initial($words[$i]);
            } else {
                $str .= HighSchoolSweetheart::initial($words[$i]) . " ";
            }
        }
        return $str;
        throw new \BadFunctionCallException("Implement the function");
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {

        $txt = HighSchoolSweetheart::initials($sweetheart_a) . 
                "  +  " . 
                HighSchoolSweetheart::initials($sweetheart_b);

        return <<<END
        ******       ******
      **      **   **      **
    **         ** **         **
   **            *            **
   **                         **
   **     $txt     **
    **                       **
      **                   **
        **               **
          **           **
            **       **
              **   **
                ***
                 *
   END;

        throw new \BadFunctionCallException("Implement the function");
    }
}

$HSS = new HighSchoolSweetheart();
$fs = $HSS -> firstLetter("Jane");
$initial = $HSS -> initial("jane");
$initials = $HSS -> initials("jane doe");
$pair = $HSS -> pair("Blake Miller", "Riley Lewis");
print($fs . "<br>");
print($initial . "<br>");
print($initials . "<br>");
print($pair);