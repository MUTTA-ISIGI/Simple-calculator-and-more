<?php
//check if button is clicked
    if (isset($_GET["z"])){
        //start receiving data
        $firstNumber = $_GET["x"];
        $secondNumber = $_GET["z"];
        //finally, add number and print
        $answer =$firstNumber + $secondNumber;
        echo "Your answer is $answer";
    }
