<?php

$pepe = [
    "name" => "la rana pepe",
    "age" => "mil millone de",
    "ageNum" => 1000000000,
    "add" => "una galasia mu lejos"
];

$randInvs = [0 => mt_rand(0, 10000), 1 => mt_rand(20, 500)];

echo "[Pepe] - Soy ", $pepe["name"], ", tengo ", $pepe["age"], " años, y vivo en ", $pepe["add"], "\n";

if ($pepe["ageNum"] < 39){
    echo "[Harambe] - Esta fiesta es para maduritos interesantes, pírate\n\n";
} elseif($pepe["ageNum"] >= 39) {
    echo "[Harambe] - Adelante, señor\n\n";
};

//Loreemos
$lore = [];

switch (true){
    case $randInvs[0] == 0:
        $lore[] = "*Pepe entra al local y está vacío.\n";
        $lore[] = ".\n";
        $lore[] = "[Dat Boi] - Fatal tete, no ha venido nadie :_(\n[Pepe] - K mierda tio :_(\n";
        break;
    case $randInvs[0] > $randInvs[1] && $randInvs[0] <= 7000:
        $lore[] = "*Pepe entra al local y se ve envuelto en una bacanal de los memes más selectos\n";
        $lore[] = ",\nnavegando con habilidad entre doges y spidermans de los 60.\n";
        $lore[] = "[Dat Boi] - Va perfe loco! Han venío ".$randInvs[0]." personas y solo invité a ".$randInvs[1]."!\n[Pepe] - Pos de puta madre\n";
        break;
    case $randInvs[0] > 7000:
        $lore[] = "*Pepe abre la puerta y le llueve una avalancha de trollfaces\n";
        $lore[] = ",\nesquivando a los memes a duras penas.\n";
        $lore[] = "[Dat Boi] - Illo se nos ha petao el garito, sal pa fuera k desalojamo\n[Pepe] - No me joda loco que acabo de llegar jueputa >:(\n";
        break;
    case $randInvs[0] > 10 && $randInvs[0] <= 20 && $randInvs[1] < 30:
        $lore[] = "*Pepe entra a la fiesta\n";
        $lore[] = ".\n";
        $lore[] = "[Dat Boi] - Pos aski en una fiesta random\n[Pepe] - Jajaj como lo sabe el loco\n";
        break;
};

//Lore, te elijo a ti!
echo $lore[0];

echo "*Su primo y gran amigo Dat Boi le ve desde la barra y corre en su monociclo hacia Pepe".$lore[1]."\n";

echo "[Pepe] - Waddup boiiiiii
[Dat Boi] - Waddap Pepe, k dise kbesa?
[Pepe] - Aski de party, como va la cosa?\n";

echo $lore[2]."\n";

echo "*Pepe se va a la barra y empieza a beber.";