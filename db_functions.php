
<?php

    //connect to the db

$conn = mysqli_connect("localhost", "root", "", "mydb");

//prepare the sql query

$sql = "select * from users";

//execute the sql query

$results = mysqli_query($conn, $sql);

//process results (assoc-associate array)

while ($row = mysqli_fetch_assoc($results))
{
   /* echo "<pre>";
        var_dump($row);
    echo "<pre>";*/

   extract($row);//creates variables for each column
   echo $names, $email, $user_id;
   echo "<br>";
}

//fetch one record

$sql2 = "select * from users where user_id = 1";

$result = mysqli_query($conn, $sql2) or die(mysqli_error($conn));//shows the exact error

$row = mysqli_fetch_assoc($result);

extract($row);
echo "$names $email<br>";