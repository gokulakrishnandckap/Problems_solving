<?php

function sortIntegers($numbers)
{

// Ascending order

    sort($numbers);
    print_r($numbers);



    //Decending order
    rsort($numbers);
    print_r($numbers);

}
echo sortIntegers([2,5,1,4]);