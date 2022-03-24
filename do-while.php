<?php

$usernames = ["krandon" , "Yopi" , "Lokamus"];
do {
    $username = readline ("Write your new username: ");

}//in_array: check if value is a exist
while( in_array($username, $usernames) );
echo "\n";
?>