<?php

$coffee_store = array(
    "American"=> 15,
    "Latte" => 19,
    "Capuccino" =>23,
    "Mocca" => 21,
    
);
// creat other varible 
// foreach ($coffee_store as $coffee => $price) {
//     echo $coffee . " coast: $" . $price . "USD" . "\n"; 
// }

foreach ($coffee_store as $coffee => $price) {
    
   if( $coffee == "Capuccino" ){
       //echo "The ". $coffee . "That disguiting" . "\n";
       continue;
   }
   echo "The " . $coffee . " is nice " . "\n";
}

?>