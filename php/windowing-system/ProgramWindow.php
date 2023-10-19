<?php

require_once("Size.php");
require_once("Position.php");

class ProgramWindow
{

    // public $x;
    // public $y;
    // public $width;
    // public $height;

    // function __construct()
    // {
    //     $this->x = 0;
    //     $this->y = 0;
    //     $this->width = 800;
    //     $this->height = 600;
    // }

    function __construct(public $x = 0, public $y = 0, public $width = 800, public $height = 600) {
    
    }

    function resize($size) 
    {
        $this -> width = $size -> width;
        $this -> height = $size -> height;

    }

    function move($position) 
    {

        $this -> x = $position -> x;
        $this -> y = $position -> y;

    }
}

$window = new ProgramWindow();
$x = $window -> x;
$y = $window -> y;
$width = $window -> width;
$height = $window -> height;

$size = new Size(764, 1080);
$window->resize($size);
print($window->height . "<br>");
print($window->width . "<br>");

$position = new Position(80, 313);
$window->move($position);
print($window->x . "<br>");
print($window->y . "<br>");
