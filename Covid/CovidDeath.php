<?php

$monfichier = fopen('stat/2020.txt', 'r+');

//$ligne = fgets($monfichier);
 //echo substr($ligne, 154, 8);
 

 if ($monfichier) {
    while (($ligne = fgets($monfichier, 154)) !== false) {
        echo $$ligne;
    }
    if (!feof($ligne)) {
        echo "Erreur: fgets() a échoué\n";
    }
 }

fclose($monfichier);
?>