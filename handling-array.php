<?php

$ages= [18, 22, 32, 39, 0];
//count: count array size
echo "Have: " . count ($ages);
echo "\n";

//array_push: put it at the end
echo "Have now: " . array_push  ($ages, 56);
echo "\n";

//array_pop: remove the last element
echo "Remove: " . array_pop  ($ages);
echo "\n";

//array search: Seeks and returns the first thing it found
echo "Find: " . array_search( 0, $ages);
echo "\n";

//see what it has inside its array
print_r($ages);

// is_array: Used to know what kind of request arrive
$i_am_not_array = "eFe";
var_dump(is_array($ages));
var_dump(is_array($i_am_not_array));

// explode: identifies the separator and then converts it to an array
$list_of_fruits = "apple, mango, pear, papaya";
$list_of_fruits_array = explode(",", $list_of_fruits);
print_r($lista_de_frutas_array);

//implode: the opposite of explode, joins with whatever concatenated we put on it
$list_of_fruits_array2 = ["apple", "mango", "pear", "papaya"];
$list_of_fruits2 = implode(",", $list_of_fruits_array2);
print_r($list_of_fruits2);

?>