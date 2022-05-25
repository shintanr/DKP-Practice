
<?php

// echo ("=========== DEALER SHIN ==============");
// echo ("1. Honda Brio harga Rp160000000,00");
// echo ("2. Mercedes benz harga Rp730000000,00");
// echo ("3. BMW harga Rp739000000");
// echo ("4. Daihatzu harga 108000000");
// echo ("5. Suzuki harga 175000000");
// echo ("======================================");


// $harga = 160000000;

// echo ("Masukkan saldo: ");
// $saldo = trim(fgets(STDIN));

// if ($saldo >= $harga){
//     echo ("Anda dapat membeli mobil brio");
// } else if ($saldo <= $harga){
//     echo ("Uang anda kurang, silakan menabung lagi!");
// } else {
//     echo ("Masukan yang Anda masukkan salah");
// }

echo ("Masukkan IP Anda: ");
$ip = trim(fgets(STDIN));

if($ip >= 3 && $ip <=4){
    echo "Anda bisa mengambil 24 sks";
} else {
    echo "Anda tidak bisa mengambil 24 sks";
    if($ip >= 2.5 && $ip <= 2.99){
        echo " Hanya bisa ambil 21 sks";
    } else if($ip >= 2 && $ip <= 2.49){
        echo " Hanya bisa ambil 18 sks";
    } else if($ip >= 1.5 && $ip <= 1.99){
        echo " Hanya bisa ambil 15 sks";
    } else {
        echo " Hanya bisa ambil 12 sks";
    }
}
