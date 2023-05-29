<?php
//problem 7

$Number = readLine("Please enter a Number : ");


    if(is_numeric($Number)){
        TableInput($Number);
    }
    else{
        echo "Please enter number Only";
    }

    function TableInput($Number)
    {
        for ($i=1; $i <= 10; $i++) { 
            echo $Number." "."*"." ".$i." "."="." ".$i*$Number."\n";
        }
    }
