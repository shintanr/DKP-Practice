<?php
//  The program that reads the user input on the current and resistance, and displays the 
//  power loss of the cable on the screen. The relevant formula is P = IR2
//  , where P is the 
//  power loss in watts, I is the current in amperes and R is the resistance in ohms. 

//input R dan I

echo "Masukkan nilai hambatan: ";
$R = trim(fgets(STDIN));
echo "Masukkan nilai arus: ";
$I = trim(fgets(STDIN));

echo "\n===============================\n\n";
$P = $I * $R * $R;
echo "Daya yang dibutuhkan, jika arus sebesar ". $I . " dan hambatan sebesar ". $R ." adalah " . $P . " watt.";