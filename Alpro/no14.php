<?php

echo "Masukkan harga: ";
$input_harga = fopen("php://stdin", "r");
$harga = trim(fgets($input_harga));
echo "Masukkan jenis diskon: ";
$input_diskon = fopen("php://stdin", "r");
$diskon = trim(fgets($input_diskon));

if ($harga > 200 && $harga < 10000){
    if ($diskon  == 'A'){
        $harga = $harga - ($harga * 0.1);
    } else if ($diskon == 'B'){
        $harga = $harga - ($harga * 0.15);
    } else if ($diskon == 'C'){
        $harga = $harga - ($harga * 0.2);
    }else {
       echo "Masukan jenis diskon salah";
    } 
} else{
   echo "Anda tidak mendapat diskon";
}
"\n";
echo $harga;


//BELUM SESUAI DENGAN HARAPAN