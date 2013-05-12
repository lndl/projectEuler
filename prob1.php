<?php

//Ejercicio 1

$multiplos3 = range(0,1000-1,3);
$multiplos5 = range(0,1000-1,5);
$respuesta = array_sum(array_unique(array_merge($multiplos3, $multiplos5)));
echo "Respuesta del ejercicio 1: ".$respuesta."\n";

?>