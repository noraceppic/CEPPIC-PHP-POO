<?php
require_once './calsses/Voiture.php';

$voiture1 = new voiture();
$voiture1 ->couleur =" rouge";
$voiture1 -> masse =1200;
echo $voiture1-> affecherEnergieCinetique();
var_dump ($voiture1);
