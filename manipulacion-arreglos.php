<?php

$edades= [18, 22, 32, 39, 0];
//count cuenta el tamño del arreglo
echo "Tengo: " . count ($edades);
echo "\n";

//array_push lo pone al final 
echo "Ahora tengo: " . array_push  ($edades, 56);
echo "\n";

//array_pop quita el ultimo elemento
echo "Me quitaron: " . array_pop  ($edades);
echo "\n";

//array search Busca y devuelve lo primero que encontro
echo "encontre: " . array_search( 0, $edades);
echo "\n";

//Ver lo que tengo dentro de mi array
print_r($edades);

// is_array, sirve para saber que tipo de peticiones llegan
$no_soy_un_arreglo = "eFe";
var_dump(is_array($edades));
var_dump(is_array($no_soy_un_arreglo));

// explode identifica el separador y luego lo convierte en un arreglo
$lista_de_frutas = "manzana, mango, pera, papaya";
$lista_de_frutas_array = explode(",", $lista_de_frutas);
print_r($lista_de_frutas_array);

//implode el opuesto de explode une con cualquier concatenado que le pongamos
$lista_de_frutas_array2 = ["manzana", "mango", "pera", "papaya"];
$lista_de_frutas2 = implode(",", $lista_de_frutas_array2);
print_r($lista_de_frutas2);

?>