<?php

//use of terminal for write something and keep in some variable
$seconds = readline("Enter the time in seconds: ");

#Operations and forcing the result to be an integer
$hours = (int) ($seconds / 3600);

//Using the modulus operation to get the remainder
$seconds = (int) ($seconds % 3600);

//equals before
$minutes = (int) ($seconds / 60);
$seconds = (int) ($seconds % 60);

//print what was requested
echo "Hours: " . $hours;
echo "\n";
echo "Minutes: " . $minutes;
echo "\n";
echo "Seconds: " . $seconds;
echo "\n";


?>