<?php
//simple array

$numbers = [3,44,2,50,90];
$fruits = array("mango","orange","apple");

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[0];


//associative arrays

$colors = [
    1 => 'red', //same as index 0
    5 => 'blue', //index 1
    6 => 'black', // index 2
];

// echo $colors[6];

$hex = [
   'red' => '#f00', //same as index 0
    'blue' => '#0f0', //index 1
    'green' => '#00f', // index 2
];

// echo $hex['red'];


$person = [
   'first_name' => 'chinonso', //same as index 0
    'last_name' => 'king', //index 1
    'email' => 'chinonso@gmail.com', // index 2
];

// echo $person['email'];

//arrays within arrays or inside arrays


$persons = [
    [
        'first_name' => 'chinonso', //same as index 0
         'last_name' => 'king', //index 1
         'email' => 'chinonso@gmail.com', // index 2
    ],
    [
        'first_name' => 'john', //same as index 0
         'last_name' => 'doe', //index 1
         'email' => 'john@gmail.com', // index 2
    ],
    [
        'first_name' => 'emly', //same as index 0
         'last_name' => 'joe', //index 1
         'email' => 'emly@gmail.com', // index 2
    ],
];

// echo $persons[2]['email'];
var_dump(json_encode($persons));
// print_r(json_encode($persons));


?>