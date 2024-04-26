<?php
$score = 72;

switch($score)
{
    case $score<40:
        {
            echo("Fail");
        }
        break;
    case $score<50:
        {
            echo("pass");
        }
        break;
    case $score<60:
        {
            echo("Second lower");

        }
        break;

    case $score<70:
        {
            echo("Second Upper");
        }
        break;
    case $score>70 && $score<101:
        {
            echo("First Class Owners");
        }
        break;
    default:
    {
        echo("Error! try again");
    }
}






?>