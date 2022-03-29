<?php
$possible_words = array("hola", "Holli");
do {
    array_push($possible_words, (string)readline ( "write your word: "));
    echo "Do you finished to write the words?" . 
    "\n" . "1. for continue." . "\n" . "2. for leave" . "\n";
    $leave = (int) readline();
    switch($leave){
        case 1:
            $leave = 1;
            break;
        default:
            $leave = 0;
    }
} while ($leave == 1);
$numbers_try = 1;
$numbers_try = (int) readline ( "How many attempts can you have?: " );

echo "  ¡Games of hanged! \n\n";
//game start
$number = count($possible_words);
$choosen_word = $possible_words[ rand(1, $number) ];
//only lowercase
$choosen_word = strtolower($choosen_word);
//Since the word
$word_length = strlen($choosen_word);
$discovered_letters = str_pad(" ", $word_length, "_");

echo $discovered_letters;
echo "\n";
?>