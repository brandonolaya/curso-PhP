<?php

$cafes = array(
    "Late" => 45,
    "capuchino"=> 50,
    "Americano" => 62,
);
//echo "El precio del cafe Americano es: {$cafes ['Americano']}";

$personas = array(
    "carlos"=> array(
        "edad" => 18,
        "apellido" => "Ruiz",
    ),

    "Mr.Michi" => array(
        "edad" => 12,
        "apellido" => "Michisancio", 
    ),
);

echo "La informacion de MR. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . "\n" . "Su apellido: " . $personas["Mr.Michi"]["apellido"];
echo "\n";

?>