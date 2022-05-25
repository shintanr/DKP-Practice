//cek seri positif
<?php

echo("Masukkan R1: ");
$input_R1 = fopen("php://stdin", "r");
$R1 = fgets($input_R1);
echo("Masukkan R2: ");
$input_R2 = fopen("php://stdin", "r");
$R2 = fgets($input_R2);
echo("Masukkan R3: ");
$input_R3 = fopen("php://stdin", "r");
$R3 = fgets($input_R3);

if($R1 >= 0 && $R2 >= 0 && $R3 >= 0){
    $RTotal = $R1 + $R2 + $R3;
    echo("Total tahanan sebesar: ". $RTotal);
}