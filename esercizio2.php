<?php

/* Traccia 2:
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei
numeri pari contenuti all’interno dell’array
Hint: per verificare se un numero è pari utilizzare l’operatore modulo % */

$listaNumeri = [2,3,5,6,7,9,10,15,19,20,22,24,27,30,35,40,43,45];

$sommaPari = 0;
$numeriPari = 0;

foreach ($listaNumeri as $numero) {
    if  ($numero % 2 === 0) {
        $sommaPari += $numero;
        $numeriPari++;
    }
}

    if ($numeriPari > 0) {
        $mediaNumeriPari = $sommaPari / $numeriPari;
        echo "La media dei numeri pari é: $mediaNumeriPari";
    }else {
        echo "Non sono presenti numeri Pari.";
    }
?>