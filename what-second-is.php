<?php

##use of terminal for write something and keep in some variable
$hours = readline("How many hours are there: ");
$minutes= readline("How many minutes are there: ");
$seconds= readline("How many seconds are ther: ");

##Management of opereations and defining variable of way forced
$minutes += (int)($hours * 60);
$seconds += (int)($minutes * 60);

##Impresion en pantala
echo "There are " . $seconds . " seconds";
echo "\n";
?>