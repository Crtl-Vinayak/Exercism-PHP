<?php

function language_list(...$items)
{
    // implement the language list function
    return $items;
}

function add_to_language_list($list, $item) 
{

    

}

$language_list = language_list();
$language_list = language_list("PHP", "Haskell", "Java", "C++", "Rust");


$language_list = language_list();
// => []
$language_list = add_to_language_list($language_list, "Clojure");
// => ["Clojure"]