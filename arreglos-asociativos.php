<?php

//Primera forma de ver un arreglo teniendo tipo Json de JavaScrip
/*
$cafes = array(
    "Late" => 45,
    "capuchino"=> 50,
    "Americano" => 62,
);
//echo "El precio del cafe Americano es: {$cafes ['Americano']}";
*/

//arreglo con mas arerglos 
$personas = array(
    "carlos"=> array(
        "edad" => 18,
        "apellido" => "Ruiz",
        "vivienda" => array(
            "ciudad" => "Bogota",
            "barrio" => "Turinguia",
            "direccion" => "calle 123 # 456",
            "casa"=> array(
                "apartamente"=> "206",
                "habitaciones"=> 4,
                "baños" => 1,
                "cocinas" => 1,
                "sala" => 1,

            ),
        ),
    ),

    "Mr.Michi" => array(
        "edad" => 12,
        "apellido" => "Michisancio", 
    ),
);

//Como imprimir lo que queremos
echo "La informacion de MR. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . "\n" . "Su apellido: " . $personas["Mr.Michi"]["apellido"];
echo "\n";

?>