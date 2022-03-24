<?php

//First way to view an array having Json de JavaScrip
/*
$coffes = array(
    "Late" => 45,
    "capuchino"=> 50,
    "American" => 62,
);
//echo "The price of the coffe American is: {$coffe ['American']}";
*/

//Arrays with more Arrays
$people = array(
    "carlos"=> array(
        "Age" => 18,
        "LastName" => "Ruiz",
        "Home" => array(
            "City" => "Bogota",
            "Neighborhood" => "Turinguia",
            "Address" => "calle 123 # 456",
            "House"=> array(
                "Apartment"=> "206",
                "Rooms"=> 4,
                "Bathrooms" => 1,
                "Kitchens" => 1,
                "Livingrooms" => 1,

            ),
        ),
    ),

    "Mr.Michi" => array(
        "Age" => 12,
        "LastNAme" => "Michisancio", 
    ),
);

//How to print what we want
echo "The information of MR. Michi is: Age: " . $people["Mr.Michi"]["Age"] . "\n" . "Su LastName: " . $people["Mr.Michi"]["LastName"];
echo "\n";

?>