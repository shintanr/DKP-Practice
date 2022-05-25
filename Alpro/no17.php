<?php

//menentukan faktor bilangan

echo "Masukkan angka yang ingin dicek: ";
$angka = trim(fgets(STDIN));

$jumlah = 0;
for($i = 1; $i <= $angka; $i++){
    if($angka % $i == 0){
        $jumlah++;
       echo $i. " ";
    }
}

echo "Banyaknya faktor ada ". $jumlah;