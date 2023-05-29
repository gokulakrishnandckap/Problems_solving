<?php


//Problem 5

$Input = readLine("Please enter a Number : ");


    if(is_numeric($Input)){
        fibonacciSeries($Input);
    }
    else{
        echo "Please enter number Only";
    }

function fibonacciSeries($Input){

    $num1 = 0;
    $num2 = 1;

    for($i=0;$i<$Input;$i++){

        $result = $num1+$num2;
        $num1 = $num2;
        $num2 = $result;


        echo $result;
        echo "\n";
    }
}

