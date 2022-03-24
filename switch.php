<?php

//person one 
$person =readline("Write a number: ");

switch($person){
    case 1:
        echo "Him favorite food is the fruits";
        break;
    case 2:
        echo "Her favorite food is the hamburguer";
        break;
    case 3:
        echo "Her favorite food is the hot dog";
        break;
    //The case 3 jump because not break, continue in case 4
    case 3:
    case 4:    
        echo "Her favorite food is the pizza";
        break;
    default:
        echo "the person doesn't live";
}

echo "\n";
?>