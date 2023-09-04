<?php

$texto= "El salvador";

$variable_1 = $texto;
$variable_2 = &$texto;

echo $variable_2;

$texto="Victor David";

echo $variable_2;