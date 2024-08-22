<?php
    $fruits = ["Naranja", "Manzana", "Pera"];

    $player = [
        "name" => "Lionel",
        "last_name" => "Messi",
        "number" => 10
    ];

    $characters [
        ["name" => "", "surname" => ""],
        ["name" => "", "surname" => ""],
        ["name" => "", "surname" => ""],
        ["name" => "", "surname" => ""],
        ["name" => "", "surname" => ""]
    ];
    
    echo "<ul>";
    // for ($i=0; $i < count($fruits) ; $i++) { 
    //     echo "<li> {$fruits[$i]} </li>";
    // }

    foreach ($fruits as $fruit) {
        echo "<li> {$fruit} </li>";
    }
    
    echo "<ul/>";

    echo $player["name"];
    echo $player["last_name"];
    echo $player["number"];
?>