<?php

/* Traccia 3:
Scrivere un programma che stampi in console tutti i numeri da uno a cento.
Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
se multiplo di 5 stampare “JAVASCRIPT”;
se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY" */

for ($i=0; $i <= 100 ; $i++) { 
    if ($i % 3 == 0) {
        echo "PHP"." \n";
    }elseif ($i % 5 == 0){
        echo "JAVASCRIPT"." \n";
    }elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY"." \n";
    }
}

?>

