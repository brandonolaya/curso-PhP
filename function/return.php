<?php


function ivan() {
    $ramdon_number = rand(1, 4);
    $phrases_ivan = "";
    switch($ramdon_number){
        case 1:
            $phrases_ivan = "Que dice el brandy.\n";
            break;
        case 2:
            $phrases_ivan = "pillese esto. \n";
            break;
        case 3:
            $phrases_ivan = "Amo Javita. \n";
            break;
        default:
            $phrases_ivan = "vemos. \n";
    }
    //return the result of the function
    return $phrases_ivan;
}
//print of the result the function
echo ivan();
echo "\n";


?>