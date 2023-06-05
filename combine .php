<?php

function combine($key,$value)
{
    //using buildin function  method

    // $result = array_combine($key,$value);
    // return $result;

    // looping method
    $result1 =[];
    $res = array_keys($key);
    $res1 = array_keys($value);

    for ($i=0; $i < count($res); $i++) { 

        $result1[$key[$res[$i]]] = $value[$res1[$i]];       

    }

    return $result1;
    
}
print_r(combine(array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third",
    "field4"=>"fourth"
),
array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus",
    "field4value"=>"dogs"
)));