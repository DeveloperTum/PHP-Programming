<?php
$score = 50;

if($score<40)
{
    echo("Grade: E");
}
    if($score>39 && $score<50)
    {
        echo("Grade: D");
    }

        if ($score>49 && $score<60)
         {
            echo("Grade: C");
         }

            if($score>59 && $score<70)
            {
                echo("Grade: B");
            
            }

                if($score>69 && $score<80)
                {
                    echo("Grade: A-");
                
                }
                    if($score>79 && $score < 101)
                    {
                        echo("Grade: A");
                    }
                         else
                            {
                                 echo(":End of grading");
                            }
                
?>