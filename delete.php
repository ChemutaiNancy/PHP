
<?php
//post-not in url

//get-attached to the url-not secure to send passwords

extract($_GET);//create variable id

//echo $id;

require ("mydb_conn.php");
$sql = "delete from users where user_id = $id";

mysqli_query($conn, $sql);

//redirect

header("location:table.php");