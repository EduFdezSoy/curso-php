<?php



for($i = 1; $i <= 10; $i++) {
    
    $numeroRandom = mt_rand(0, 100);

    if($numeroRandom %2 == 1){
        echo $numeroRandom." es impar";

    }else {
        echo $numeroRandom." es par";

    }
    
    echo ".\n";
}

