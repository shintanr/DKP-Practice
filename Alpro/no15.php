<?php
ECHO "Masukkan jam: ";
$jam = trim(fgetS(STDIN));
echo "Masukkan jenis golongan: ";
$golongan = trim(fgets(STDIN));

if ($jam > 0 & $jam <= 40){
    switch($golongan){
        case 1:
            $upah = $jam * 1000;
            break;
        case 2: 
            $upah   = $jam * 1500;
            break;
        case 3: 
            $upah = $jam * 2000;
            break;
        case 4: 
            $upah = $jam * 2500;
            break;
        default:
            echo "jenis golongan yang Anda gunakan salah";
    }
} else {
    if ( $jam > 0 & $jam > 40){
        $jam = $jam - 40;
        switch($golongan){
            case 1:
                $upah = (40 * 1000) + ($jam * 1000 * 1.5);
                break;
            case 2: 
                $upah   = (40 * 1500) + ($jam * 1500 * 1.5);
                break;
            case 3: 
                $upah = (40 * 2000) + ($jam * 2000 * 1.5);
                break;
            case 4: 
                $upah = (40 * 2000) + ($jam * 2000 * 1.5);
                break;
            default:
                echo "jenis golongan yang Anda gunakan salah";

    }
    echo $upah;
}
}