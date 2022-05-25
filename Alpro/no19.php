<?php

//membuat deret bilangan prima yang 
//misal N = 10, maka deretnya adalah 2,3,5,7

// langkah-langkah

echo "MAsukkan bilangan yang akan dicek: ";
$angka = trim(fgets(STDIN));

$jumlah = 0;    for($j = 1; $j <= $i; $j++) {
        if($i % $j == 0) {
            $jumlah = $jumlah + 1;
        }
    }
    if($jumlah == 2){
       
       $bilPrima =  $i. " ";
       echo $bilPrima;
       
    }
    $jumlah = 0;




