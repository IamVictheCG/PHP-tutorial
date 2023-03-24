<?php
// echo "hello";

//for loop
// for($x=0; $x<=10; $x++) {
//     echo "the number is $x<br>";
// }


//while loop
// $x = 1;
// while($x <= 15) {
//     echo "the number is $x<br>";
//     $x++;
// }

//do while loop
// $a = 0;
// $num =1;
// do {
//     $x = "Victor";
//     echo "$num)__ My name is $x<br>";
//     $num++;
//     $a++;
// } while ($a <= 10);

$posts = ['Post One', 'Post Two', 'Post Three'];

// for ($i=0; $i < count($posts); $i++) { 
//     echo $posts[$i];
// }

foreach ($posts as $i => $post) {
    echo $i.'_'.$post.'<br>';
}

// // Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}
?>