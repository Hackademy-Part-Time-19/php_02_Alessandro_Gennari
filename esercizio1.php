<?php

/* Traccia 1:
Dato un array contenente una serie di array associativi di utenti con nome, cognome
e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o
“Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del
genere, utilizzando if…elseif…else
Implementa nuovamente l’esercizio utilizzando uno switch */

/* foreach if-elseif */

$utente = [ ['nome' => 'Alessandro', 'cognome' => 'Gennari', 'genere' => 'M' ],
            ['nome' => 'Maria', 'cognome' => 'Bianchi', 'genere' => 'F' ],
            ['nome' => 'Going', 'cognome' => 'Merry', 'genere' => 'N.C.' ]
        ];

    foreach ($utente as $campo){
        $saluto = "Buongiorno ";

        if ($campo['genere'] == 'M' ) {
            $saluto .= "Sig. ";

        }elseif ($campo['genere'] == 'F') {
            $saluto .= "Sig.ra ";
        }
        
        $saluto .= $campo['nome'] . " " . $campo['cognome'];
        echo $saluto ." \n";
    }


/* foreach switch */


$utente = [ ['nome' => 'Alessandro', 'cognome' => 'Gennari', 'genere' => 'M' ],
            ['nome' => 'Maria', 'cognome' => 'Bianchi', 'genere' => 'F' ],
            ['nome' => 'Going', 'cognome' => 'Merry', 'genere' => 'N.C.' ]
        ];
        
    foreach ($utente as $campo) {
        $saluto = "Buongiorno ";

        switch ($campo['genere']) {
            case 'M':
                $saluto .= "Sig. ";
                break;

            case 'F':
                $saluto .= "Sig.ra ";
                break;    
            
            default:
                echo "";
                break;
        }

        $saluto .= $campo['nome'] . " " . $campo['cognome'];
        echo $saluto ." \n";
    }

?>