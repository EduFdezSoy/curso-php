<?php



for($i = 1; $i <= 10; $i++) {
    
    $numeroRandom = mt_rand(0, 100);
    if($numeroRandom %2 == 1){
        echo $numeroRandom;
        echo ".\n";
    }
    if ($numeroRandom %2 == 0){
        echo $numeroRandom." es divisible entre dos. Te jodes.";
        break;
    }
    if ($numeroRandom %5 == 0){
        echo $numeroRandom." es divisible entre cinco. Te jodes igualmente.";
        break;
    }
    
}