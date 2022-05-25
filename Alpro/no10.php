<?php

//melakukan cek pada ketiga inputan dari ketiga sisi segitiga dan jika ketiganya benar akan menampilkan bentuk dari segitiga dan jika

echo("Masukkan s1: ");
$input_s1 = fopen("php://stdin", "r");
$s1 = fgets($input_s1);
echo("Masukkan s2: ");
$input_s2 = fopen("php://stdin", "r");
$s2 = fgets($input_s2);
echo("Masukkan s3: ");
$input_s3 = fopen("php://stdin", "r");
$s3 = fgets($input_s3);

if ($s1 <= 0 || $s2 <= 0 || $s3 <= 0){
    echo("Terdapat nilai yang bukan sisi segitiga");
} else if ($s1 == $s2 && $s2 == $s3){
    echo("segitiga sama sisi");
} else if ($s1 == $s2 xor $s2 == $s3){
    echo("segitiga sama kaki");
} else {
    echo ("Segitiga sembarang");
}


echo("Anjay jadi");
