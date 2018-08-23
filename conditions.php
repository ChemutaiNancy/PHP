<?php
$weight = 70;
$height = 1.6;

$bmi = $weight/($height*$height);

echo "BMI is $bmi";

if ($bmi < 15)
{
    echo "-Very Severely Underweight";
}

elseif ($bmi >= 15 and $bmi < 16)
{
    echo "<br>Severely Underweight";
}

elseif ($bmi >= 16 and $bmi < 18.5)
{
    echo "<br>Underweight";
}

elseif ($bmi >= 18.5 and $bmi < 25)
{
    echo "<br>Normal (healthy weight)";
}

elseif ($bmi >= 25 and $bmi < 30)
{
    echo "<br>Overweight";
}

elseif ($bmi >= 30 and $bmi < 35)
{
    echo "<br>Obese Class I (Moderately obese)";
}

elseif ($bmi >= 35 and $bmi < 40)
{
    echo "<br>Obese Class II (Severely obese)";
}

elseif ($bmi >= 40 and $bmi < 45)
{
    echo "<br>Obese Class III (Very severely obese)";
}

elseif ($bmi >= 45 and $bmi < 50)
{
    echo "<br>Obese Class IV (Morbidly Obese)";
}

elseif ($bmi >= 50 and $bmi < 60)
{
    echo "<br>Obese Class V (Super Obese)";
}

else
{
    echo "<br>Obese Class VI (Hyper Obese)";
}