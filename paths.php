<?php

$numero = readline ( "Cuando numero son" );
$par= array();
$impar= array();
//ubuica pares he impares
for ( $i = 1; $i <= $numero ; $i++ ) { 
    $num = (int) ( $i % 2);
    if ( $num == 0 ) {
        array_push ( $par, $i);
    }else{
        array_push ( $impar, $i);
    }
};

$inicio = readline("donde estoy: ");
$final = readline("destino final: ");
$camino_tierra = 0;
//camino de pares

if ((int)($inicio % 2) == (int)( $final%2 )) {
    if ($inicio < $final) {
        for ( $i = array_search($inicio, $par); $i < array_search($final, $par); $i++) { 
        $camino_tierra ++;
        }
    }
    elseif($inicio > $final){
        for ( $i = array_search($final, $par); $i < array_search($inicio, $par); $i++) { 
        $camino_tierra ++;
        }
    }
}
//camino de impares
if ((int)($inicio % 2) != 0 && (int)( $final%2 ) != 0) {
    if ($inicio < $final) {
        for ( $i = array_search($inicio, $impar); $i < array_search($final, $impar); $i++) { 
        $camino_tierra ++;
        }
    }
    elseif($inicio > $final){
        for ( $i = array_search($final, $impar); $i < array_search($inicio, $impar); $i++) { 
        $camino_tierra ++;
        }
    }
}

echo "Hay ". $camino_tierra .  " caminos por tierra" . "\n";
// print_r( $par ) . "\n";
// print_r( $impar ) . "\n";
echo "\n";
?>