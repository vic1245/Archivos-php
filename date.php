<?php
date_default_timezone_set("America/Bogota");

// $fecha_us=date("Y/m/d");
$fecha_us=date("l d F Y");
$fecha_es=date("d-m-Y");

$hora_12 = date("h:i a");
$hora_24 = date("H:i");
// echo $hora_24."<BR>";
// echo $hora_12;
// echo $fecha_us."<br>";
// echo $fecha_es;

// $fecha_completa=date();
// echo $hora_24;

// $fecha_completa=date("d-m-Y h:i A");
// echo $fecha_completa;

$fecha_completa=date("l d F Y H:i A");
echo $fecha_completa;
