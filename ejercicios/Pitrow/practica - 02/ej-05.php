<?php

for ($i = 0; $i < 10; $i++) {

    $n = mt_rand(0, 100);       

    if(($n % 2) == 1){
        echo $i." - ".$n."\n";        
    };

    if($n % 2 == 0 && $n % 5 == 0){
        echo "\n".$i." - ".$n." - break!";
        break;
    };
};