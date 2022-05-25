<?php

echo "Masukkan nilai N: ";
$input_N = fopen("php://stdin", "r");
$N = fgets($input_N);

if ($N % 2 == 0){
    $N += 3;
    if($N % 5 == 0){
        $N += 5;
    }else {
        $N += 2;
    }
echo $N;
} else {
    $N += 2;
    if($N % 3 == 0){
        $N += 4;
    } else{
        $N += 1;
    }
}
