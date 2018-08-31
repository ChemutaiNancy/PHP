
<?php
extract($_GET);//create variable id

//echo $id;

$conn = mysqli_connect("localhost", "root", "", "school");

$sql = "delete from employees where employee_id = $id";

mysqli_query($conn, $sql);

//redirect

header("location:employees.php");