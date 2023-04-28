<?php
$fruits = ['apple','orange','mango'];
//get length
// echo count($fruits);

//search array
// var_dump(in_array('apple',$fruits));

//add to array
$fruits[] = 'pineaaple';
array_push($fruits, 'pawpaw','strawberry');
array_unshift($fruits, 'pear');
// print_r($fruits);

//remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[3]);
// print_r($fruits);

//split into a chunk
$chunkArray = array_chunk($fruits, 2);
// print_r($chunkArray);

//array merge
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);
$arr4 = [...$arr1,...$arr2];
// print_r($arr4);

$a = ['red','blue','black'];
$b = ['avocado','house','door'];

$c = array_combine($a,$b);
// print_r($c);
$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number) {
    return "number $number";
}, $numbers);
// print_r($newNumbers);

$lessThanTen = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThanTen);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);






?>