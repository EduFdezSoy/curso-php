<?php

$personas = mt_rand(0, 10000);
$invitaciones = mt_rand(20, 500);

if ($personas>$invitaciones){

    echo "Vaya, al parecer se torció un poco. Invité solo a ".$invitaciones." y llegaron unas ".$personas." personas.";
    }

if ($personas<$invitaciones){
    
    echo "Pueeees parece que no hay mucho ambiente en la fiesta... Han llegado menos de los que invité...";
    }

if ($personas=$invitaciones){
        
    echo "Guau, han llegado exactamente las personas que invité.";
    }
