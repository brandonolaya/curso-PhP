<?php

//uso de consola para escribir algo y alamecerla en alguna variable
$segundos = readline("ingresa el tiempo en segundo: ");

#Operaciones y forzando al resultado a que sea un numero entero
$horas = (int) ($segundos / 3600);

//USando la operacion modulo paara optener el residuo
$segundos = (int) ($segundos % 3600);

//igual lque las anterionres
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

//imprimir lo que se solicito
echo "Horas: " . $horas;
echo "\n";
echo "Minutos: " . $minutos;
echo "\n";
echo "Segundos: " . $segundos;
echo "\n";


?>