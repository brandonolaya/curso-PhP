<?php

$available_seats = 12;
$movie = false;

if($available_seats>0){
    echo "You can see the movie";
}
elseif($movie == true){
    echo "Great";
}
else{
    echo "Sorry, you need spoilers";
}
echo "\n";
?>