<?php

    if (isset($_GET["c"])){
        $height = $_GET["b"];
        $weight = $_GET["a"];
        $bmi = $weight/($height*$height);
    }
    if ($bmi < 18){
        echo "underweight";
    }elseif ($bmi < 24.9){
        echo "normal weight";
    }elseif ($bmi < 34.9){
        echo "overweight";
    }else{
        echo "obese";
    }
    echo "<hr>";



