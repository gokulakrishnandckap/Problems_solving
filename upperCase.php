<?php

$string = (string)readline("Please enter the value :");

$result = "";
 for ($i=0; $i < strlen($string); $i++) { 

  
  if (ord($string[$i]) >= 65 && ord($string[$i]) <= 90)
   {

        $result .= chr(ord($string[$i]));
   }
   else if(ord($string[$i]) >= 97 &&  ord($string[$i]) <= 122)
   {

        $result .= chr(ord($string[$i]) - 32);
   }
 }
echo $result;


