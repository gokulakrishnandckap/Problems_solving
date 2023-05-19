<?php




function primeLogic($Num)
{
    $emp = $Num." is a prime number";
    for ($i=2; $i < $Num; $i++) { 
        if($Num % $i == 0)
        {
            $emp = $Num." is Not a prime number";
            break;
        }
        else{
            $emp = $Num." is a prime number";
        }
    }
    return $emp;
}


echo primeLogic(2);









?>
