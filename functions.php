<?php
    // $x = 10;
    // function registerUser(){
    //     global $x;
    //     echo $x;
    //     echo 'Hi Victor, you have been registered';
    // }

    // function registerUser($name){
    //     echo "Hi $name, you have been registered";
    // }
    // registerUser('Victor Okechukwu');

    // function sum($b1,$b2) {
    //     // echo $b1 + $b2;
    //     return $b1 + $b2;
    // }
    // $num = sum(4, 6);

    function sum($b1=4,$b2=6) {
        // echo $b1 + $b2;
        return $b1 + $b2;
    }
    
    // // sum(4, 6);
    // echo sum(4, 6);
    // $num = sum();
    // echo $num;

    //Arrow function
    $subtract = fn($x,$Y) => $x-$y;

    echo $subtract(10, 6);

?>