<?php

    $cantidad = 12;
    $total = $cantidad * 700;

    if($cantidad < 5){
        $total = $total- ($total * 0.10); 
    }else if($cantidad >= 5 && $cantidad < 10){
        $total = $total- ($total * 0.20); 
    } else if($cantidad >= 10 ){
        $total = $total- ($total * 0.40); 
    } 

    echo "El total a pagar es $" .$total;