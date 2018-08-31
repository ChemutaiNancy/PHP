<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<?php
    include ("nav.php");
?>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-active">
                <tr>
                    <th>User id</th>
                    <th>Names</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th class="text-center">Secure Password</th>
                    <th>Update</th>
                </tr>



                <?php
                require ("mydb_conn.php");

                //prepare the sql query

                $sql = "select * from users";

                //execute the sql query

                $results = mysqli_query($conn, $sql);

                //process results (assoc-associate array)

                while ($row = mysqli_fetch_assoc($results))
                {
                    extract($row);//creates variables for each column

                    $x = $status == 1? 'disabled': '';//if statement

                    echo "<tr>
                            <td class='text-center'>$user_id</td>
                            <td>$names</td>
                            <td>$email</td>
                            <td><a class='btn btn-info btn-sm' href='delete.php?id=$user_id'>Delete</a></td>
                            <td class='text-center'><a class='btn btn-primary btn-sm $x ' href='secure.php?id=$user_id'>Secure</a></td>
                            <td><a class='btn btn-success btn-sm' href='update.php?id=$user_id'>Update</a></td>
                        </tr>";

                    //employees
                    //combined sales and products
                }
                ?>
            </table>
        </div>
    </div>
    </div>

</body>
</html>

