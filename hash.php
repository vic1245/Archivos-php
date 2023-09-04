<?php

$clave = "HolaMundo123";

// echo md5($clave);
// echo sha1($clave);
// echo hash("md5",$clave)."<br>";

// foreach(hash_algos()as $algoritmos){//Todos los hash que soporta
//     echo $algoritmos." - ".hash($algoritmos, $clave)."<br>";
// }

// echo password_hash($clave,PASSWORD_DEFAULT);//Algoritmo de procesamiento
// echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);
$clave_procesada = password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

$clave_2 = "1234567";

if(password_verify($clave_2, $clave_procesada)){//Hace una validacion boleana

    echo "Las claves coinciden";
}else{
    echo "Las claves no coinciden";
}

