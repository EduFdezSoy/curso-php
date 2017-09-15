<?php

while(TRUE){

    $n = mt_rand(0, 100);
    echo "$n\n";

    if($n == 100){
        echo "STOP!\n\n\n\n~BREAKING TIME~";
        break;
    };
    
};

