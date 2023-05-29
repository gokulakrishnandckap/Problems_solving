<?php

// problem 4

$name=["racecar"];
$check="";
function palindrome($name)
{
    global $check;
    $names = $name[0];

    for($i=strlen($names)-1;$i>=0;$i--)
    {
        $check = $check.$names[$i];
    }
    if($check == $names)
    {
        return $check." is true"."\n";
    }
    else{
        return $check." is false"."\n";
    }
}
echo palindrome($name);

