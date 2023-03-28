<?php
$numbers = [2, 4, 1, 5, 3, 6];
$fruits = ['Apple', 'Banana', 'melon'];
// print_r($numbers);
// print_r($numbers);

echo $fruits[1];

//Associative Arrays
$colors = [
    1 => "blue",
    2 => "green",
    6 => "black",
    8 => "orange",
];
echo $colors[6];

$hex = [
    'red' => "#f00",
    'blue' => "#0f0",
    'green' => "#00f",
];
echo $hex['red'];

$person = [
    'first_name' => 'Victor',
    'last_name' => 'Okechukwu',
    'email' => 'vicoke360@gmail.com',
];
echo $person['last_name'];

//Multi-dimentional Array
$people = [
    [
        'first_name' => 'Victor',
        'last_name' => 'Okechukwu',
        'email' => 'vicoke360@gmail.com',
    ],
    [
        'first_name' => 'Testimony',
        'last_name' => 'Usiola',
        'email' => 'Tessy@gmail.com',
    ],
    [
        'first_name' => 'Victoria',
        'last_name' => 'Onaji',
        'email' => 'jvee@gmail.com',
    ],
];

// echo $people[2]['email'];
var_dump(json_encode($people));
?>