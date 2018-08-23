<?php

//an array is a variable that can hold multiple values

$scores = [5, 13, 15, 3, 17, 25, 29, 35, 38, 45, 41, 55, 65, 75, 85, 95];

echo "$scores[0]<br>";

//the number of scores

echo sizeof($scores);

sort($scores);

echo "<br>$scores[0]<br>";

//inbuilt functionalities in php (functions)

echo array_sum($scores);

echo "<br>";

echo array_sum($scores)/sizeof($scores);

echo "<br>";

var_dump($scores);

echo "<br>";

$names = ["Joe", "Ann", "June", "Dylan", "Jane"];

echo "$names[3]<br>";

$names[] = "Teddy";//add names

echo "<pre>";
var_dump($names);//shows info about arrays
echo "</pre>";
