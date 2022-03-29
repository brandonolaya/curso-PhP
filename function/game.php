<?php
function clear(){
    if (PHP_OS === "WINNT"){
        system ("cls");
    }
    else{
        system ("clear");
    }
}


$possible_words = ["fruits", "meals", "back", "color", "computer", 
                    "lap-top", "girls", "phone","soccer" ];

define("MAX_ATTEMPS", 8);

echo "  ¡Games of hanged! \n\n";
//game start
//try the words
$choosen_word = $possible_words[ rand(0, 9) ];

//only lowercase
$choosen_word = strtolower($choosen_word);

//Since the word
$word_length = strlen($choosen_word);
//str_pag: full the string
$discovered_letters = str_pad("", $word_length, "_");
$attempts =0;


do{
    echo "Palabra de " . $word_length . " letras " . "\n\n";
    echo $discovered_letters . "\n\n";

    //Write user a letter
    $player_latter = readline("Write a letter: ");
    $player_latter = strtolower($player_latter);

    //validate
    if( str_contains($choosen_word, $player_latter) ){
        //occurrences of the latter to replace it
        $offset = 0;
        while(
            ($letter_pasition = strpos($choosen_word, $player_latter, 
            $offset) ) !== false 
        ){
            $discovered_letters [$letter_pasition] = $player_latter;
            $offset = $letter_pasition + 1;

        }
    }
    else{
        clear();
        $attempts++;
        echo "letter incorrect, You have " .(MAX_ATTEMPS - $attempts). " trys";
        sleep(2);
    }
    clear();
}while($attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word);
clear();

if ($attempts < MAX_ATTEMPS) {
    echo "¡¡You WINNNN!!"
}
else{
    echo "¡Lunk for soon, JAJAJAJA!"
}
echo "The word is: " . $choosen_word . "\n";
echo "You found: " . $discovered_letters . "\n";
echo "\n";
?>