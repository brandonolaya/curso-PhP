<?php

//array the animals
$animals = array(
    "dogs" => array(
        "Name"=> "Piri",
        "Occupation" => "Sleep",
        "Color" => "White and Black",
        "Meal" => array(
            "GoodMeal" => "Beef",
            "BadMeal" => "Fish",
        )
    ),
    "cats" => array(
        "Name"=> "Irin",
        "Occupation" => "Eat",
        "Color" => "Gray and Yellow",
        "Meal" => array(
            "GoodMeal" => "Fish",
            "BadMeal" => "Vegetables",
        )
    ),
    "monkeys" => array(
        "Name"=> "Filox",
        "Occupation" => "Clown",
        "Color" => "Brown",
        "Meal" => array(
            "GoodMeal" => "Fruits",
            "BadMeal" => "Meat",
        )
    ),

);
//Animal Dog
echo "Name: " . $animals["dogs"]["Name"] . "\n" .
    "Occupation: " . $animals["dogs"]["Occupation"] . "\n" .
    "Color: " . $animals["dogs"]["Color"] . "\n" .
    "Good meal: " . $animals["dogs"]["Meal"]["GoodMeal"] . "\n" .
    "Bad meal: " . $animals["dogs"]["Meal"]["BadMeal"] . "\n";
echo "\n";
//Animal Cat
echo "Name: " . $animals["cats"]["Name"] . "\n" .
    "Occupation: " . $animals["cats"]["Occupation"] . "\n" .
    "Color: " . $animals["cats"]["Color"] . "\n" .
    "Good meal: " . $animals["cats"]["Meal"]["GoodMeal"] . "\n" .
    "Bad meal: " . $animals["cats"]["Meal"]["BadMeal"] . "\n";
echo "\n";
//Animal Monkey
echo "Name: " . $animals["monkeys"]["Name"] . "\n" .
    "Occupation: " . $animals["monkeys"]["Occupation"] . "\n" .
    "Color: " . $animals["monkeys"]["Color"] . "\n" .
    "Good meal: " . $animals["monkeys"]["Meal"]["GoodMeal"] . "\n" .
    "Bad meal: " . $animals["monkeys"]["Meal"]["BadMeal"] . "\n";
echo "\n";

?>