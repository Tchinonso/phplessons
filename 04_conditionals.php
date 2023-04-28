<?php
$age = 10;

// if($age >= 18){
//     echo "you are old to vote";
// } else {
//     echo "you are not old to vote";
// }


$t = date("H");

// if($t < 12){
//     echo "good morning";
// } elseif($t < 17){
//     echo "good afternoon";
// } else {
//     echo "good evening";
// }

$post = ['my post','your post'];

// if(!empty($post)){
//     echo $post[1];
// }else{
//     echo "no post";
// }

//with ternary operator

// echo !empty($post) ? $post[0] : "no post";

//assigning it to a variable
// $check_post = !empty($post) ? $post[1] : "no post";
// $check_post = !empty($post) ? $post[1] : null;

// $check_post = $post[0] ?? null;
// echo $check_post;


//switches

$favcolor = 'white';

switch ($favcolor){
    case 'red':
        echo "your fav color is red";
        break;
    case 'blue':
        echo "your fav color is blue";
        break;
    case 'green':
        echo "your fav color is green";
        break;
    default:
    echo "we no get your fav color";
}

?>