<?php
$fruits = ['Orange', 'Apple', 'Pear'];

//Get Array length
echo count($fruits);

//search array
var_dump(in_array('Apple',$fruits));

$fruits[] = 'Grape';
print_r($fruits);
array_push($fruits, "Mango");
print_r($fruits);
?>
