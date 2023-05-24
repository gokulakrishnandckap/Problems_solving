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

Function reverseNumber($input){
    $str = str_split($input);
    for ($i=count($str)-1; $i >= 0 ; $i--) { 
        echo $str[$i];
    }
}
 echo reverseNumber(123456);





?>
