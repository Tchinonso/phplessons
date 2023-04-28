<?php
// echo output is used for strings, numbers, html etc,
//example - echo 123, "hello", 10.5;

//print - works like echo but it can only take a single argument,
//example - print 123;

//print_r() - prints single values and arrays,
//example - print_r([1,2,3]);

//var_dump() - returns more info like data type and lenght,
//example - var_dump("hello");

//var_export() - similar to var_dump(). outputs a string representation of a variable,
//example - var_export("hello");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php output shorthand -->
    <?= "hello world"; ?>
</body>
</html>