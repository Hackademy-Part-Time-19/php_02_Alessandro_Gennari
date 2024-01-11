<?php

/* Traccia 5:
Integra il seguente array con la traccia precedente, stampando per ogni riga la
stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”
$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28,
"Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 2
4, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" =
> 9, ]; */

$temperature = [

    "Venezia" => 16,
    "Bari" => 32,
    "Roma" => 28,
    "Napoli" => 30,
    "Milano" => 13,
    "Palermo" => 14,
    "Torino" => 24,
    "Lecce" => 27,
    "Genova" => 30,
    "Catania" => 11,
    "Cosenza" => 9,
];

foreach ($temperature as $citta => $gradi){
        echo "A $citta fa ";

        if ($gradi < 15){
            echo "freddo con $gradi °C"." \n";

        }elseif ($gradi >= 15 && $gradi <= 25){
            echo "caldo con $gradi °C"." \n";
        }else {
            echo "molto caldo con $gradi °C"." \n";
        };
}

?>