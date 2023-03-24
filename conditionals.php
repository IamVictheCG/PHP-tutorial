<?php
$age = 19;

// if($age < 19){
//     echo "You are not old enough to vote";
// } else {
//     echo "Please go forward";
// }

$time = date("H");
// echo $time;

// if($time <= 12) {
//     echo "Good morning";
// } elseif($time > 12 && $time < 15) {
//     echo "Good Evening";
// } elseif($time > 15 && $time < 24) {
//     echo "Good Evening";
// }

$post = ['First_Post'];
// if(!empty($post)) {
//     echo $post[0];
// } else {
//     echo "Nothing to see here";
// }
// echo !empty($post) ? $post[0]: "Nothing to see here"

// $first = !empty($post) ? $post[0]: "Nothing to see here 

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
// $firstPost = $posts[0] ?? null;

// var_dump($firstPost);

/* -------- Switch Statements ------- */

$favcolor = 'orange';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}

?>