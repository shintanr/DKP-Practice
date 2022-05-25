<?php

echo "Masukkan r: ";
$jarijari = trim(fgets(STDIN));
echo "Masukkan h: ";
$tinggi = trim(fgets(STDIN));
$pi;

if($jarijari % 7 == 0 || $tinggi % 7 == 0){
    $pi = 22/7;
} else {
    $pi = 3.14;
}

echo "\n=======================================\n\n";
$volume = $pi * $jarijari * $jarijari * $tinggi;
$luasPermukaan = 2*$pi*$jarijari * ($tinggi + $jarijari);
echo "volume silinder adalah ". $volume . " cm.";
echo "luas permukaan silinder adalah ". $luasPermukaan . " cm.";