<?php

$cantidad_1 = 12732.5;
$cantidad_2 = 1931.81;

// number_format(cantidad,decimal,sep_decimal,sep_millar);

// echo number_format($cantidad_1);

$cantidad_2 = number_format($cantidad_2,2,".","");
echo $cantidad_2;
