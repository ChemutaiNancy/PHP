
<?php
require ("school_conn.php");
//check if the data is there
if (isset($_GET["id"]))//checking the existence of a record
{
    extract($_GET);//created variable majina and email
//    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "select * from employees where employee_id = $id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    extract($row);//display details in the form
}

if (isset($_POST["update"]))//checks if the user has clicked the update button
{
    extract($_POST);
//    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "UPDATE `employees` SET `names`='$names',`email`='$email',`gender`='$gender', `phone_no`='$phone', `dob`='$dob', `salary`='$salary'
            where employee_id = $id";

    mysqli_query($conn, $sql);

    header("location:employees.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include "nav_employee.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h2 class="text-center">Update Employee</h2>
            <!--            echo name-->
            <form action="update_employee.php" method="post">

                <input type="hidden" name="id" value="<?=$employee_id?>">

                <div class="form-group">
                    <input type="text" value="<?=$names?>" class="form-control" placeholder="Names" name="names" required>
                </div>

                <div class="form-group">
                    <input type="email" value="<?=$email?>" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <input type="text" value="<?=$gender?>" class="form-control" placeholder="Gender" name="gender" required>
                </div>

                <div class="form-group">
                    <input type="number" value="<?=$phone_no?>" class="form-control" placeholder="Phone" name="phone" required>
                </div>

                <div class="form-group">
                    <input type="date" value="<?=$dob?>" class="form-control" placeholder="Dob" name="dob" required>
                </div>

                <div class="form-group">
                    <input type="number" value="<?=salary?>" class="form-control" placeholder="Salary" name="salary" required>
                </div>

                <button type="submit" name="update" class="btn btn-successs btn-block">Update Employee</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>