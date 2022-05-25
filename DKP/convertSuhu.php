<?php

// The program that reads the user input on temperature in degrees Fahrenheit, and then 
// converts the temperature from degrees Fahrenheit into degrees Celsius. The relevant 
// formula is given as follows: Celsius= (5/9)(Fahrenheit – 32). 

//langkah-langkah
//input
//proses: buat variabel yang menampung rumus
//output hasil

echo "Masukkan besar suhu dalam fahrenheit: ";
$fahrenheit = trim(fgets(STDIN));

$celcius = 5/9 * ($fahrenheit - 32);
echo $fahrenheit. " derajat fahrenheit sama dengan ". round($celcius) . " derajat celcius";
