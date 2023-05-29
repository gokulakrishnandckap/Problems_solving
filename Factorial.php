<?php

// problem 6


$FactorialInput = readLine("Please enter a Number : ");


    if(is_numeric($FactorialInput)){
        FactorialInput($FactorialInput);
    }
    else{
        echo "Please enter number Only";
    }


    function  FactorialInput($FactorialInput)
    {
        $str = $FactorialInput;
        $res = 0;
        for ($i=$FactorialInput-1; $i >= 1; $i--) { 
            $res = $str*$i;
            $str = $res;
        }
        echo $res;
        echo "\n";
    }
