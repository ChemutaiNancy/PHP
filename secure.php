
<?php
extract($_GET);//create variable id

//echo $id;

require ("mydb_conn.php");

$sql = "select * from users where user_id = $id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

extract($row);//creates variables from the database

//echo $password;

$hashed = password_hash($password, PASSWORD_BCRYPT);

$sql = "update users set password = '$hashed', status = 1 where user_id = $id";

mysqli_query($conn, $sql);

header("location:table.php");//redirects data to the database