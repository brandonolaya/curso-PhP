<?php

echo "¡Hola!! ¿Me podrias decir la que dia es hoy? \n";
echo "¡Claro! Hoy es " . obterner_fecha_hora() . "\n";

function obterner_fecha_hora(){
    return date('l jS \of F Y h:i:s A');
}
echo "\n";
?>