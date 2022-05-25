
<?php

echo("Masukkan angka pertama: ");
$input_iA = fopen("php://stdin", "r");
$iA = fgets($input_iA);
echo("Masukkan angka kedua: ");
$input_iB = fopen("php://stdin", "r");
$iB = fgets($input_iB);
echo("Pilih operasi: ");
$input_operasi = fopen("php://stdin", "r");
$operasi = fgets($input_operasi);

switch ($operasi){
    case $operasi == 'a':
        $hasil = $iA+$iB;
        echo("Hasilnya adalah: ". $hasil);
        break;
    case 'b';
        $hasil2 = $iA-$iB;
        echo("Hasilnya adalah: ". $hasil2);
        break;
    case 'c';
        $hasil3 = $iA/$iB;
        echo("Hasilnya adalah: ". $hasil3);
        break;

}

//belum solved