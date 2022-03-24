<?php

$How_much_money_do_I_have = readline ("How much money do I have?: ");
if($How_much_money_do_I_have >= 100){
    echo "You can remover your money";
}
else{
    echo "Sorry, your money is insufficient, you need: " . 
    (-1 * ($How_much_money_do_I_have - 100)) . " dollars";
}
echo "\n";

?>