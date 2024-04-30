<?php

$day =1;
//$day =7;
//$day =8;

switch($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        {
            echo("Today is a good day of the week");
        }
        break;
    case 6:
    case 7:
        {
            echo("Today is a super weekend");
        }
        break;
    default:
    {
        echo ("Weird day");
    }
}



?>