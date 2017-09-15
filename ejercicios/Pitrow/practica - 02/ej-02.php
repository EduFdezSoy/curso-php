<?php

$numbers = array();

for ($i = 0; $i < 10; $i++) {

    $n = mt_rand(0, 100);    
    $numbers[$i] = $n;
    $par = "";

    if(($n % 2) == 0){
        $par = " - par";
    } elseif (($n % 2) == 1){
        $par = " - impar";
    };
    
    echo "\nNº ".($i+1)." = ".$n.$par;

};