
<?php
$sentence = "The river is flowing towards the East";

echo strtoupper($sentence);//call a function

//passing parameters or arguments

$upper = strtoupper($sentence);//conversion to uppercase

echo "<br>$upper";

$lower = strtolower($upper);

echo "<br>$lower <br>";//conversion to lowercase


echo str_word_count($lower);// word count

echo "<br>";

echo strlen($lower);//number of characters

echo "<br>";

echo str_ireplace("RIVER", "lake", $lower);//replacing words in a sentence;
// word to be replaced, replacement and the sentence
//str_ireplace-case insensitive

echo "<br>";

$password = "lovelace";

//password encryption
$salt = "usfdsgfsuydfgsdyufgdsuyfusdfufy873475bhjvhv534539289101=`gfuyykgdkfyfgygygygftffrdssss";

echo md5("$salt$password$salt");

echo "<br>";

echo sha1($password);

echo "<br>";

echo crypt($password, $salt);

echo "<br>";

echo md5(sha1($password));

echo "<br>";

echo password_hash($password,PASSWORD_BCRYPT);//secure since it changes

echo "<br>";

$number = 50;

$result = sqrt($number);//squareroot

echo "<br>";

//$result = pow($number, 3);

//echo pow($number, 2);//power of 2

echo round($result, 2);//rounding off to two decimal places

echo "<br>";

echo log10(100);

echo "<br>";

date_default_timezone_set('Africa/Nairobi');
echo date("Y-m-d");
echo "<br>";
echo date("H:i:s a");

echo "<br>";

file_put_contents("data.txt", "Hello\n", FILE_APPEND);//creating a file-nginex server(for work environment)

echo file_get_contents("data.txt");//print data from the file

echo "<br>";
//functions

/*which day of the week, month
round a number without truncating*/

date_default_timezone_set("Africa/Nairobi");
echo date("l F Y");

echo "<br>";

$num = 10.55333333;

echo ceil($num);

echo "<br>";

echo floor($num);
