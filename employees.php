<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    include "nav_employee.php";
?>
<div class="container">
    <h2>Employees Data</h2>
    <input type="text" id="input" class="form-control" placeholder="Search..">
    <br>
    <div class="col-sm-12">
        <table class="table table-danger table-bordered" id="emp">
            <tr>
                <th>Employee_id</th>
                <th>Names</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone_no</th>
                <th>Dob</th>
                <th>Salary</th>
                <th>Remove</th>
                <th>Update</th>
            </tr>



            <?php

            include "school_conn.php";

            //prepare the sql query

            $sql = "select * from employees";

            //execute the sql query

            $results = mysqli_query($conn, $sql);

            //process results (assoc-associate array)

            while ($row = mysqli_fetch_assoc($results))
            {
                extract($row);//creates variables for each column
                echo "<tr>
                            <td>$employee_id</td>
                            <td>$names</td>
                            <td>$email</td>
                             <td>$gender</td>
                            <td>$phone_no</td>
                            <td>$dob</td>
                            <td>$salary</td>
                            <td><a href='remove.php?id=$employee_id'class='btn btn-danger btn-lg'><span class='glyphicon'>
                                </span><img src='img/delete.png' style='width: 30px; height: 30px'></a></td>
                             <td><a class='btn btn-success btn-sm' href='update_employee.php?id=$employee_id'>Update Employee</a></td>
                        </tr>";

                //employees
                //combined sales and products
            }
            ?>
        </table>
    </div>
</div>
<script>
    $(document).ready( function () {
        $("#input").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#emp tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            })
        })
    } );
</script>
</body>
</html>

