<?php

//Ejercicio 1
$name = "Pepe";
$age = 1000;
$add = "Senda de la Amargura Nº 666";

echo "[EJ01] - Soy ".$name.", tengo ".$age." años y vivo en ".$add."\n";

//Ejercicio 2
if($age < 39){
    echo "[EJ02] - Lo siento, no puedes entrar\n";
} elseif($age > 39){
    echo "[EJ02] - Adelante\n";
};

//Ejercicio 3
$asistentes = mt_rand(0, 10000);
$invitados = mt_rand(20, 500);

echo "[EJ03] - Han venido ".$asistentes." personas, invité a ".$invitados."\n";

//Ejercicio 4
switch (true){
    case $asistentes == 0:
        echo "[EJ04] - No ha venido nadie :c\n";
        break;
    case $asistentes > $invitados && $asistentes <= 7000:
        echo "[EJ04] - Esto es un éxito!"." Han venido ".$asistentes." personas y solo invité a ".$invitados."\n";
        break;
    case $asistentes > 7000:
        echo "[EJ04] - Illo se nos ha petao el garito, sal pa fuera k desalojamo\n";
        break;
    case $asistentes > 10 && $asistentes < 20 && $invitados < 30:
        echo "[EJ04] - La fiesta es estupenda, hay tarta para todos\n";
        break;
};

echo "\n\nLa creatividad la estoy ejercitando en el alternativo, me he tomado la licencia de no usarla aquí";