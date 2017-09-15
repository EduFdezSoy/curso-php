<?php

//De que número quieres la tabla?
$number = 5;

//La tabla empezará en $number X $x y terminará en $number X $y
$x = 1;
$y = 10;

for ($i = $x; $i < ($y + 1); $i++){    
    
    echo $number." X ".$i." = ".($number * $i)."\n";

};