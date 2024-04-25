<?php

//1. This is a single line comment

/* This is a multiline comment
*/

//2. The start of variable declararion.
$word = "Welcome to PHP Programming";
$msg = 'We are just getting started';

$space = "<br>";

//Printing out in php using print()
print($word);
//Printing out i n php using echo()
echo("$space $msg");
 
// PHP Data types
$a = 2;
$b = 2.1;
$c = "Coding";
$d = true;

$e = [6,7,8];

//int data type
echo ("$space 1.");
var_dump($a);

//float data type
echo ("$space 2.");
var_dump($b);

//string data type
echo ("$space 3.");
var_dump($c);

//bolean data type
echo ("$space 4.");
var_dump($d);

//array data type
echo ("$space 5.");
var_dump($e);


//string lenght

$neno = "wendot";
echo "$space 6. string length for $neno is:";
echo strlen($neno);


//word count
echo "$space 7.Word count for $neno is:";
echo str_word_count($neno);

//string to upper & lower
 $f = "upper";
echo ($space);
 echo strtoupper("8.:$f");
 $g = "lower";
 echo ($space);
 echo strtolower("9.$g");

 //reverse strings
 $h = "reverse";
 echo ($space);
 echo strrev($h);

 //remove white space
 $i = "white space";
 echo ($space);
 echo trim($i);

 //convert string to array

 $j = "this is a programmer";
 echo ($space);
 $k = explode(" ", $j);
 print_r($k);
?>
