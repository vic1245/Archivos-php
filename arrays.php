<?php
# Array de tipo escalar
// $estudiantes=array("Carlos","Jose","Vanessa","Victor",7);
// $estudiantes[3]= "Claudia";
// echo $estudiantes[1];

#Array de tipo asociativo
$tutor=["nombre"=>"Victor",
"apellido"=>"David",
"edad"=>27];
echo $tutor[1];
$tutor["edad"]=19;

#Array de tipo asociativo
$tutor_2=["nombre"=>"Vannessa",
"apellido"=>"Restrepo",
"edad"=>20,
"cursos"=>["PHP","Python","CSS"]
];

$tutor_2["pais"]="El Salvador";

echo count($tutor_2,COUNT_RECURSIVE);