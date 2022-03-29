<?php
//to avoid mistakes the variable a and b have the value 0
function plus( $a =0 , $b = 0){
    echo "The plus of $a + $b is: " . $a +$b . "\n";

}
plus (5,6);
//join teo arrays
$array_1 = [1, 2, 3];
$array_2 = [4, 5 ,6];
$result = [...$array_1, ...$array_2];
print_r($result); 


function less($c, $d){
    echo "The plus of $c - $d is: " . $c - $d . "\n";
}
$numbers = [3, 9];
//Pass the numbers of the array to the function
less(...$numbers);
//js are parameters_ress
function plus_infinity(...$params){
    $more = 0;
    foreach ($params as $value) {
        $more += $value;
    }
    echo "the plus is: " . $more . "\n";
}
plus_infinity(4,5,6,7);
plus_infinity(7,8,9,5);


echo "\n";
?>