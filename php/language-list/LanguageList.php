<?php

function language_list(...$items)
{
    // implement the language list function
    return $items;
}

function add_to_language_list($list, $item) 
{
    // array_push($list, $item); // <-- Also an option, 
                                // but this looks ambiguous (same parameters as add_to_language_list).
    
    // code can be better than this below.
    // $list[count($list)] = $item;

    // this is much better:
    // $list[] = $item;

    // other possible way to add element to list:
    return [...$list, $item];

    return $list;
}

function prune_language_list($list) 
{
    // Method 1:
    // array_shift($list); // This is just ambiguous if we already making a function about this.

    // Method 2 (Inefficient...)
    // for($i = 0; $i < count($list) - 1; $i++) {
    //     $list[$i] = $list[$i + 1];
    // }
    // unset($list[count($list) - 1]);
    // return array_values($list);

    // Method 3 (Simple):
    unset($list[0]);

    // // Method 4:
    // return array_slice($list, 1);

    return array_values($list);
}

function current_language($list) {
    return $list[0];
}

function language_list_length($list) {
    // Method 1:
    // return count($list);

    // Method 2:
    $count = 0;
    while (array_key_exists($count, $list)) {
        $count++;
    } 
    return $count;
}

$language_list = language_list();
$language_list = language_list("PHP", "Haskell", "Java", "C++", "Rust");

$language_list = language_list();
$language_list = add_to_language_list($language_list, "Clojure");

$language_list = language_list("PHP");
$language_list = prune_language_list($language_list);

$language_list = language_list("PHP", "Prolog");
$first = current_language($language_list);

$language_list = language_list("PHP", "Prolog", "Wren");
$language_list = language_list_length($language_list);