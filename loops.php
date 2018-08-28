<?php

//for loop

/*for ($x = 3; $x <= 100; $x+=3)
{
//    print "$x Chemu <br>";

    $result = $x * $x;
    print "$x x $x = $result<br>";
}*/


//loop that prints from 100 to 1

/*for($x = 100; $x >=0; $x--)
{
    print "$x<br>";
}*/

//looptoprint all odd numbers between 50 and 100
/*
for($x = 50; $x <= 100; $x++)
{
    if ($x % 2 == 0)
    {
//        print 0;
    }
    elseif ($x % 2 != 0)
    {
        print "$x <br>";
    }

//    print "Odd number is: $x<br>";
}*/

//while loop




//for each - loops thro' an array


$scores = [5, 13, 15, 3, 17, 25, 29, 35, 38, 45, 41, 55, 65, 75, 85, 95];

foreach ($scores as $score)
{
    print "$score<br>";
}

$names = ["Joe", "Ann", "June", "Dylan", "Jane"];

foreach ($names as $woo)
{
    print "$woo<br>";
}

//do while loop

