<?php

// TRACCIA 5
// Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”// con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso

$corsoHackademy = [
    "docenti" => ["Mattia", "Emanuele", "Davide"],
    "studenti" => ["Luca", "Keri", "Samuele"],
    "argomenti" => ["HTML", "CSS", "JS", "PHP", "Laravel"]
];

echo "Sono" . " " . $corsoHackademy["studenti"][0] . " e sto studiando" . " " . $corsoHackademy["argomenti"][3] . " con il docente " . $corsoHackademy["docenti"][1] . ".";