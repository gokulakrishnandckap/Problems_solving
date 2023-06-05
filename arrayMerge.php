<?php
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);
$arr2= [];
$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
 array_push($arr2, $referenceTable['val2']);

$testArray = array_merge($testArray, $arr2);

$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);