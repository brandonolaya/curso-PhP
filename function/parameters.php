<?php

function is_student_legend ($platzi_rank){

    if ( $platzi_rank >= 20000 ) {
        echo "¡You are a student Legend!\n";
    }
    else{
        echo "Sorry, You need more points, so cheer up keep learning,\n";
    }
}
//Don't stop executed the code 
do {
    $points = readline ("How many points do you have?: ");
    is_student_legend((int)$points);
} while (true);


echo "\n";
?>