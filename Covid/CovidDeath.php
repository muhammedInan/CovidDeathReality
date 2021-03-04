<?php

$monfichier = fopen('stat/2020.txt', 'r+');


 //155-162

$ligne = fgets($monfichier);
 echo substr($ligne, 154, 8);


fclose($monfichier);
?>