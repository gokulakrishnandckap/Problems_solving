<?php




// function primeLogic($Num)
// {
//     if($Num == 1)
//     {
//         return false;
//     }
//     for ($i=2; $i < $Num; $i++) { 
      
//         if($Num % $i == 0)
//         {
//             return false;
//         }
//     }
//     return true;
// }
// $Number = 35;

// $result = primeLogic($Number);

//     if(!$result)
//     {
//         echo "Not a prime Number";
//     }
//     else
//     {
//         echo "It's prime Number";

//     }



    //Problem 2, Write a program to find no of days between two dates in Php?


        // $first = (string)readline('Enter Start Date(mm/dd/yyyy): ');
        // $second = (string)readline('Enter End Date(mm/dd/yyyy): ');


        // if($first == $second)
        // {
        //     echo "Your trying to calculate same dates";
        // }
        // else
        // {
        //     $fristDate = strtotime($first);
        //     $currentDate = strtotime($second);
        //     $result = ($currentDate - $fristDate)/86400;
        //     echo abs($result)."Days";
        // }


//Problem 3  

// Function reverseNumber($input){
//     $str = str_split($input);
//     for ($i=count($str)-1; $i >= 0 ; $i--) { 
//         echo $str[$i];
//     }
// }
//  echo reverseNumber(123456);


//problem 4

// $name=["racecar"];
// $check="";
// function palindrome($name)
// {
//     global $check;
//     $names = $name[0];

//     for($i=strlen($names)-1;$i>=0;$i--)
//     {
//         $check = $check.$names[$i];
//     }
//     if($check == $names)
//     {
//         return $check." is true"."\n";
//     }
//     else{
//         return $check." is false"."\n";
//     }
// }
// echo palindrome($name);



//Problem 5






// $Input = readLine("Please enter a Number : ");


//     if(is_numeric($Input)){
//         fibonacciSeries($Input);
//     }
//     else{
//         echo "Please enter number Only";
//     }

// function fibonacciSeries($Input){

//     $num1 = 0;
//     $num2 = 1;

//     for($i=0;$i<$Input;$i++){

//         $result = $num1+$num2;
//         $num1 = $num2;
//         $num2 = $result;


//         echo $result;
//         echo "\n";
//     }
// }



// problem 6


// $FactorialInput = readLine("Please enter a Number : ");


//     if(is_numeric($FactorialInput)){
//         FactorialInput($FactorialInput);
//     }
//     else{
//         echo "Please enter number Only";
//     }


//     function  FactorialInput($FactorialInput)
//     {
//         $str = $FactorialInput;
//         $res = 0;
//         for ($i=$FactorialInput-1; $i >= 1; $i--) { 
//             $res = $str*$i;
//             $str = $res;
//         }
//         echo $res;
//         echo "\n";
//     }


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
            echo $i." "."*"." ".$Number." "."="." ".$i*$Number."\n";
        }
    }

?>
