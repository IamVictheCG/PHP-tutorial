<?php
    $x = 10;
    function registerUser(){
        global $x;
        echo $x;
        echo 'Hi Victor, you have been registered';
    }

    registerUser();
?>