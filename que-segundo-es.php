<?php

##uso de consola para escribir algo y alamecerla en alguna variable
$horas = readline("Cuantas horas hay: ");
$minutos= readline("Cuantos minutos hay: ");
$segundos= readline("cuantos segundo hay: ");

##MAnejo de operaciones y definiendo variable de manera forzada
$minutos += (int)($horas * 60);
$segundos += (int)($minutos * 60);

##Impresion en pantala
echo "Hay " . $segundos . " segundos";
echo "\n";
?>