<?php
//cek bulan

echo("Masukkan kode bulan: ");
$input_bulan = fopen("php://stdin", "r");
$bulan = fgets($input_bulan);

if ($bulan < 1|| $bulan > 12){
    echo("Masukan kode bulan salah, coba lagi!");
} else{
    switch($bulan){
        case 1:
            echo("Januari");
            break;
        case 2:
            echo("Februari");
            break;
        case 3:
            echo("Maret");
            break;
        case 4:
            echo("April");
            break;
        case 5:
            echo("Mei");
            break;
    }
}