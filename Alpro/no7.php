
<?php

while (true){
echo "Masukkan kode hari: ";
$input_hari = fopen("php://stdin", "r");
$hari = trim(fgets($input_hari));


if ($hari < 1 || $hari > 7){
    echo ("Masukan nomor kode hari tidak tepat, coba lagi!");
} else{
    switch ($hari){
        case 1: 
            echo ("senin");
            break;
        case 2:
            echo ("selasa");
            break;
        case 3: 
            echo("rabu");
            break;
        case 4: 
            echo("kamis");
            break;
        case 5: 
            echo("jumat");
            break;   
        case 6: 
            echo("sabtu");
            break;
        case 7: 
            echo("minggu");
            break;
    }
}
}



