<?php

//mengecek bilangan prima

echo "Masukkan angka yang ingin dicek: ";
$angka = trim(fgets(STDIN));

$jumlah = 0;
for($i = 1; $i <= $angka; $i++){
    if($angka % $i == 0){
        $jumlah++;
    }
}

if($jumlah == 2) {
    echo $angka. " merupakan bilangan prima";
} else {
    echo $angka. " merupakan bukan bilangan prima";
}
