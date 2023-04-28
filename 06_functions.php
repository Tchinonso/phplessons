<?php
function registerUser($email){
    echo $email . ' registered';
};
// registerUser('mike');

function sum($n1,$n2){
    return $n1 + $n2;
};
// $number = sum(8,9);
// echo $number;

$subtract = function($n1,$n2){
    return $n1 - $n2;
};
// echo $subtract(6,7);


?>