<?php
//for loop

// for ($x = 0; $x < 10; $x++){
//     echo 'number ' . $x . '<br>';
// }


//while loop.

// $x = 1;
// while($x < 15){
//     echo 'number ' . $x . '<br>';
//     $x++;
// }


// do...while loop.

// $x = 0;

// do{
//     echo 'number ' . $x . '<br>';
//     $x++;
// } while($x <= 7);


//foreach loop.

$post = ['first post ', ' second post ', ' third post'];
// for($x = 0;$x <= count($post); $x++){
//     echo $post[$x];
// }

// foreach($post as $postInd){
//     echo $postInd;
// }

// foreach($post as $index => $postInd){
//     echo $index . '-' . $postInd . '<br>';
// }


//foreach in associative array.
$person = [
    'first_name' => 'chinonso', //same as index 0
     'last_name' => 'king', //index 1
     'email' => 'chinonso@gmail.com', // index 2
];
foreach($person as $key => $value){
    echo "$key - $value <br>";
}

?>