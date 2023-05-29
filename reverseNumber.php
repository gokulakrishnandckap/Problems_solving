<?php
// Problem 3  

Function reverseNumber($input){
    $str = str_split($input);
    for ($i=count($str)-1; $i >= 0 ; $i--) { 
        echo $str[$i];
    }
}
 echo reverseNumber(123456);