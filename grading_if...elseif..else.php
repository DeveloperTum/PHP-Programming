<?php
$space = "</br>";
//if ...elseif....else
$score = 100;
if($score<40)
{
    echo("$space Grade . E");
}

elseif($score>39 && $score<50)
{
echo("$space Grade. D ");
}

elseif($score>49 && $score<60)
{
    echo("$space Grade. C");
}

elseif($score>59 && $score<70)
{
    echo("$space Grade. B");
}

elseif($score>69 && $score<80) {

    echo("$space Grade. A-");
}

elseif ($score>79 && $score<101) 
{
    echo("$space Grade. A");
}

else{
    echo("$space Grade. Input error!! Enter score again");
}

?>