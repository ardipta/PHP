<?php

    $firstName = "Sakib";
    $lastName = "Khan";

    echo $firstName." ".$lastName.
        "<br>";
    echo "The full name is: $firstName $lastName"."<br>";
    $x = 10;
    $y = 20;

    echo $x + $y."<br>";

      //Operator
        //Incerement decrement $x++ $x--;
        //Arithmetic operator +, -, *, /
        //Assignment Operator =, +=, -=
        //Comparision Operator ==, >=, <=, <, <
        //Logical Operator &&, ||

      //Statement
        //Single line
        //Conditional statement if, else, else if, switch
        //Repeated statement for, while, do while, for each

    $x = 21;
    if ($x<0){
        echo "$x is less than zero";
    }
    else if($x>0 && $x<20){
        echo "$x is between zero to twenty";
    }
    else{
        echo "$x is greater than twenty"."<br>";
    }

    $x = 30;

    switch ($x){
        case 2:{
            echo "$x is equal to two"."<br>";
            break;
        }
        case 5:{
            echo "$x is equal to five"."<br>";
            break;
        }
        case 7:{
            echo "$x is equal to 7"."<br>";
            break;
        }
        case 10:{
            echo "$x is equal to ten"."<br>";
            break;
        }
        default:{
            echo "$x not found"."<br>";
        }
    }

    $date = Date("M");
    echo "$date"."<br>";
    $date = Date("m");
    echo "$date"."<br>";
    $date = Date("d-m-y");
    echo "$date"."<br>";

    $date = Date("D");
    switch ($date){
        case "Sun":{
            echo "Today is Sunday"."<br>";
            break;
        }
        case "Mon":{
            echo "Todat is Monday"."<br>";
            break;
        }
        case "Tues":{
            echo "Today is Tuesday"."<br>";
            break;
        }
        case "Wed":{
            echo "Today is Wednesday"."<br>";
            break;
        }
        case "Thu":{
            echo "Today is Thursday"."<br>";
            break;
        }
        case "Fri":{
            echo "Today is Friday"."<br>";
            break;
        }
        default:{
            echo "Wrong input"."<br>";
            break;
        }
    }

    for($x = 1; $x <= 10; $x++){
        if($x<10){
            echo "$x -";
        }
        else{
            echo "$x"."<br>";
        }
    }

    for($x = 20; $x <= 40 ; $x++){
        if($x%2 == 0){
            echo "$x is a even number"."<br>";
        }
       else{
           echo "$x is a odd number"."<br>";
       }
    }
    $sum = 0;
    for ($x = 1; $x <= 30; $x++) {
        $sum += $x;
    }
    echo "Sum is: " . $sum . "<br>";

    echo "<br>";
    for($x = 1; $x<=10; $x++){
        for ($y=1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }

    for($x = 1; $x<=10; $x++){
        for ($y=10; $y > $x; $y--){
            echo "&nbsp";
        }
        for ($z=1; $z <= $x; $z++){
            echo "*";
        }
        echo "<br>";
    }
    $data = array("Ashiqur", "Rahman", "Dipto");
    echo $data[0]." ".$data[1]." ".$data[2];
    echo "<br>";

    $data[23] = "Ashiqur";
    $data[231] = "Rahman";
    $data[331] = "Dipta";

    foreach ($data as $datum){
        echo "$datum ";
    }

    $data = array("AR" => "Dipto", "Effat" => "Tamanna");
        foreach ($data as $key => $value) {
            echo "My first is " .$key." Last name is ".$value."<br>";
        }

     ?>
    <?php
    $data = array(
        array(
            "name" => "Sakib", "Mobile" => "01783766273", "email" => "sakib72@gmail.com"
        ),
        array(
            "name" => "Rakib", "Mobile" => "01783766273", "email" => "rakib72@gmail.com"
        ),
        array(
            "name" => "Dipto", "Mobile" => "01783766273", "email" => "dipto72@gmail.com"
        )
    );

    echo $data[0]["name"]."<br>";
    echo $data[0]["Mobile"]."<br>";
    echo $data[0]["email"]."<br>";

    function demo(){
        echo "Hello world";
    }
    demo();