<?php
//the if operators
//logical and &&, or ||, xor,! not

$a = 2;
$b = 3;
$c= 5;
$d = 7;
$space = "</br>";


//and operator

if($a=2 and $a>0);
{
    echo("1. Positive 2");
}

//&& operator
if($a=2 && $a>0);
{
    echo("$space 2. Positive 2");
}

//or operator
if($a>0 or $a=2);
{
    echo("$space 3. Positive integer");
}

// || operator
if($a>0 || $a=2);
{
    echo("$space 4. Positive integer");
}

//xor
if($a=2 xor $a=3);
{
    echo("$space 5. xor executed succesfully");
}

// ! not operator
if($a != 0);
{
    echo("$space 6.! succesfully executed");
}
?>