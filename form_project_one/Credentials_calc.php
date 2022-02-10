<?php
    if (isset($_GET["s"])){
        $radius = $_GET["r"];
        $height = $_GET["h"];
        $username = $_GET["u"];
        $passward = $_GET["p"];
            if ($username== "emobilis" and $passward=="emobilis123"){
                $volume = 3.142*$radius*$radius*$height;
                echo "The volume is $volume";
            }else{
                echo "error";
            }
    }


