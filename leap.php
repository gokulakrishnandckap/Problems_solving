<?php

$year = (int)readline("Please enter the value :");

if($year % 4 == 0)
{
    echo $year ." It is a leap year";
}
else
{
    echo $year." It is not a leap year";
}