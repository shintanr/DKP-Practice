<?php
//membuat program biaya parkir

//biaya parkir dihitung berdasarkan lamanya parkir, 1 atau 2 jam pertama akan dihitung 2000, namun jika melebihi itu, tiap satu jamnya akan dikenakan tarif 500 perjam

// program Parkir

// kamus
// jam
// biaya parkir

// algoritma
// jika angka yang dimasukkan lebih dari nol dan kurang dari sama dengan 2 maka akan ditampilkan biaya sebesar 2000. tetapi jika lebih dari 2 jam maka akan dikenakan biaya 2000 + 500 (jam - 2)

$biaya = 2000;

echo ("Masukkan jam: ");
$input_jam = fopen("php://stdin","r");
$jam = fgets($input_jam);   

if ($jam > 2){
    $biaya = $biaya + 500 * ($jam - 2);
    echo $biaya;
} else {
    echo $biaya;

}