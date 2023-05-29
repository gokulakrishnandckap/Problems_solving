<?php




function primeLogic($Num)
{
    if($Num == 1)
    {
        return false;
    }
    for ($i=2; $i < $Num; $i++) { 
      
        if($Num % $i == 0)
        {
            return false;
        }
    }
    return true;
}
$Number = 35;

$result = primeLogic($Number);

    if(!$result)
    {
        echo "Not a prime Number";
    }
    else
    {
        echo "It's prime Number";

    }




?>
