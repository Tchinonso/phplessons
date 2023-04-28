<?php
$name = "john"; // string
$age = 20; // int
$has_kids = true; // bool
$cash_at_hand = 30.7; // float

// echo $name;
// echo $age;
// echo $has_kids;
// echo $cash_at_hand;

// echo $name . ' is ' . $age . ' year old '; // php uses period (.) instead of the + sign to concatnate

// echo "$name is $age years old"; //it is much easier to use double quote instead of a single quote

// echo "${name} is ${age} years old"; //this also works aswell


// creating a constant for things you will never change, to write a constant you need to start it with a define(). the first thing you pass in should be on all uppercase
//example 

define('HOST', 'localhost');
define('DB_NAME', 'my_database');

echo HOST;
echo DB_NAME;
?>