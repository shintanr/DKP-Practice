<?php

//menentukan bilangan sempurna atau perfect number

echo "Masukkan bilangan yang ingin dicek: ";
$bilangan = trim(fgets(STDIN));

$jumlah = 0;
for ($i = 1; $i < $bilangan; $i++) {
    if($bilangan % $i == 0) {
        $jumlah = $jumlah + $i;
    }
}
 if($jumlah == $bilangan){
     echo "Bilangan Sempurna";
 } else {
     echo "Bukan bilangan sempurna";
 }
