<?php

$personas = mt_rand(0, 10000);
$invitaciones = mt_rand(20, 500);

if ($personas > $invitaciones){
    echo "¡La fiesta ha sido todo un éxito!";
} else {
    echo "La fiesta ha estado bien, no vino todo el mundo, pero es aceptable.";
} 
if ($personas == 0){
    echo "Esta fiesta ha sido una tremenda mierda.";
}
