<?php

$score = 43;

if ($score >= 80)
{
    echo "Grade is A";
}

elseif ($score >= 75 and $score < 80)
{
    echo "Grade is A-";
}

elseif ($score >= 70 and $score < 75)
{
    echo "Grade is B+";
}

elseif ($score >= 65 and $score < 70)
{
    echo "Grade is B";
}

elseif ($score >= 60 and $score < 65)
{
    echo "Grade is B-";
}

elseif ($score >= 55 and $score < 60)
{
    echo "Grade is C+";
}

elseif ($score >= 50 and $score < 55)
{
    echo "Grade is C";
}

elseif ($score >= 45 and $score < 50)
{
    echo "Grade is C-";
}

elseif ($score >= 40 and $score < 45)
{
    echo "Grade is D+";
}

elseif ($score >= 35 and $score < 40)
{
    echo "Grade is D";
}

elseif ($score >= 30 and $score < 35)
{
    echo "Grade is D-";
}

else
{
    echo "Grade is E";
}