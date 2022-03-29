<?php
//Define function but you don't use this funtion
function get_pokemon(){
    $random_number = rand (1,5);
    switch($random_number){
        case 1:
            echo "charmander";
            break;
        case 2:
            echo "Charmilion";
            break;
        case 3:
            echo "Charizar";
            break;
        default:
            echo "There's not a pokemon for you";
    }
}
//invoke the function is very importan () for run function
$coins = readline("How many coins, do you use?: ");

for ($i=1; $i <= $coins; $i++) { 
    get_pokemon();
    echo "\n";
}




?>