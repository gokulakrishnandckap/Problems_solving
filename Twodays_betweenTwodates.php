<?php

// Problem 2, Write a program to find no of days between two dates in Php?


       $first = (string)readline('Enter Start Date(mm/dd/yyyy): ');
       $second = (string)readline('Enter End Date(mm/dd/yyyy): ');
        if($first == $second)
            {
            echo "Your trying to calculate same dates";
            }
        else
            {
     $fristDate = strtotime($first);
     $currentDate = strtotime($second);
     $result = ($currentDate - $fristDate)/86400;
     echo abs($result)."Days";
            }
