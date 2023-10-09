<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        $test = !$is_knight_awake;
        return $test;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake or $is_archer_awake or $is_prisoner_awake;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return !$is_archer_awake and $is_prisoner_awake;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {

        /** NOTE!
         * 
         * use && or ||, but and or or?
         * 
         */
        $x = !$is_archer_awake && $is_dog_present;
        $y = !$is_archer_awake && !$is_knight_awake && $is_prisoner_awake;
        return $x || $y;

        // $x = ((!$is_knight_awake) and $is_dog_present);
        // $y = (!($is_archer_awake or $is_archer_awake or $is_prisoner_awake));

        // return (($x and !$y) or (!$x and $y));
        // return ($x xor $y);

        // if ($is_dog_present) {
        //     if ($is_archer_awake == false) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // } else {
        //     if ($is_knight_awake == false and $is_archer_awake == false and $is_prisoner_awake == true) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
    }
}

$is_knight_awake = true;
$is_archer_awake = true;
$is_prisoner_awake = false;
$is_dog_present = false;

$infiltration = new AnnalynsInfiltration();
$infiltration -> canFastAttack($is_knight_awake);
$infiltration -> canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake);
$infiltration -> canSignal($is_archer_awake, $is_prisoner_awake);
$infiltration -> canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present);
