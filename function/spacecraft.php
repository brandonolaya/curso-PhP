<?php

$price_of_sandwichs = [ 5, 12, 7, 9, 10];
//order values my array
usort($price_of_sandwichs, function($a, $b){
//The spaceship operator is used for comparing two expressions
    return $a <=> $b;
});
var_dump($price_of_sandwichs);

?>