<?php
// $laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

// $frutas=[
//     "Fresa"=>100,
//     "Peras"=>30,
//     "Sandias"=>17,
//     "Manzana"=>9
// ];//Asociativo

// foreach($frutas as $clave => $valor){
//     echo "Hay ".$valor." ".$clave. " en el inventario"."<br>"; 
// }//Arrays asociativos

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresor"]
];//Multiples dimensiones

foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
}
