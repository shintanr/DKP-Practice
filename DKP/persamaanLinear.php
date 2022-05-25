<?php

echo "Masukkan nilai a1: ";
$a1 = trim(fgets(STDIN));
echo "Masukkan nilai a2: ";
$a2 = trim(fgets(STDIN));
echo "Masukkan nilai b1: ";
$b1 = trim(fgets(STDIN));
echo "Masukkan nilai b2: ";
$b2 = trim(fgets(STDIN));
echo "Masukkan nilai c1: ";
$c1 = trim(fgets(STDIN));
echo "Masukkan nilai c2: ";
$c2 = trim(fgets(STDIN));

$x = (($b2*$c1)-($b1*$c2))/ (($a1*$c2)-($a2*$b1));
$y = (($a1*$c2)-($a2*$c1))/(($a1*$b1)-($a2*$b1));
echo "========================\n";

echo "x : " .$x . "\n";
echo "y : " .$y . "\n";

$A = $a1*$x + $b1*$y;
$B = $a2*$x + $b2*$y;

echo "Hasil A adalah ". $A . "\n";
echo "Hasil B adalah ". $B . "\n";

