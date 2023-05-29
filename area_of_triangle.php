<?php

$Number1 = readLine("Please enter a baseValue : ");
$Number2 = readLine("Please enter a heightValue : ");

    if(is_numeric($Number1) && is_numeric($Number2)){
        TriangleValue($Number1,$Number2);
    }
    else{
        echo "Please enter number Only";
    }


    function TriangleValue($Number1,$Number2)
    {
        echo ($Number1*$Number2)/2;
    }

