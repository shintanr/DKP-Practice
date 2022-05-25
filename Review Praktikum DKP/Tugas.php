<?php
// menghitung luas dan keluling tiga perempat lingkaran

$r = 28/2;
$pi = 3.14;

$luas = 3/4 * $pi * $r * $r;
echo "Luas dari tiga perempat lingkaran adalah : " . $luas. " cm";
echo "<br>";
echo "<br>";
echo "======================================";
echo "<br>";
$keliling = 3/4 * 2 * $pi * $r + (2 * $r);
echo "Keliling dari tiga perempat lingkaran adalah : ". $keliling . " cm";
echo "<br>";
echo "<br>";
echo "======================================";

//tugas no 2
$mahasiswa = [
    ["shinta", "banyumas", "21120121140093"],
    ["jerapah", "afrika", "21120121121121"]
];
echo "<br>";
echo $mahasiswa[1][2];
