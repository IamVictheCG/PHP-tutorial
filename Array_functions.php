<?php
// $fruits = ['Orange', 'Apple', 'Pear'];

// //Get Array length
// echo count($fruits);

// //search array
// var_dump(in_array('Apple',$fruits));

// $fruits[] = 'Grape';
// print_r($fruits);
// array_push($fruits, "Mango");
// array_unshift($fruits, 'kiwi'); // Adds to the beginning

// // Remove from array
// array_pop($fruits); // Removes last
// array_shift($fruits); // Removes first
// // Remove specific element
// unset($fruits[2]);

// // Split into chunks of 2
// $chunkedArray = array_chunk($fruits, 2);
// var_dump($chunkedArray);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
print_r($arr4);

// // Combine arrays (Keys & values)
// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);

// // Array of keys
// $keys = array_keys($c);

// // Flip keys with values
// $flipped = array_flip($c);
// var_dump($flipped);

// // Create array of numbers with range()
// $numbers = range(1, 20);

// // Map through array and create a new one
// $newNumbers = array_map(function ($number) {
//   return "Number ${number}";
// }, $numbers);

// // Filter array
// $lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// // Array Reduce
// // "carry" holds the return value of the previous iteration
// $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
// var_dump($sum);
?>
