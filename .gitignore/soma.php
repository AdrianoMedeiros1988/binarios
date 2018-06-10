<?php


$bin1 = 0011010110;
$bin2 = 000101101;

$bd1 = bindec($bin1);
$bd2 = bindec($bin2);


$somad = $bd1 + $bd2;  // realiza a soma //


echo decbin($somad);  // Soma entre $bin1 e $bin2 //

echo "<p>$bd1</p>"; // Informa o valor em decimal do primeiro número //

echo $bd2; // Informa o valor em decimal do segundo número //
