<?php

$asistentes = mt_rand(0, 10000);
$invitados = mt_rand(20, 500);

switch (true){
    case $asistentes == 0:
        echo "No ha venido nadie :c";
        break;
    case $asistentes > $invitados && $asistentes <= 7000:
        echo "Esto es un éxito!"." Han venido ".$asistentes." personas y solo invité a ".$invitados;
        break;
    case $asistentes > 7000:
        echo "Illo se nos ha petao el garito, sal pa fuera k desalojamo";
        break;
    case $asistentes > 10 && $asistentes <= 20 && $invitados < 30:
        echo "La fiesta es estupenda, hay tarta para todos";
        break;
};

//La creatividad la estoy ejercitando en el alternativo, me he tomado la licencia de no usarla aquí