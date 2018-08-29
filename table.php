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
    <div class="container">
        <div class="col-sm-6">
            <table class="table table-active">
                <tr>
                    <th>User_id</th>
                    <th>Names</th>
                    <th>Email</th>
                </tr>



                <?php
                $conn = mysqli_connect("localhost", "root", "", "mydb");

                //prepare the sql query

                $sql = "select * from users";

                //execute the sql query

                $results = mysqli_query($conn, $sql);

                //process results (assoc-associate array)

                while ($row = mysqli_fetch_assoc($results))
                {
                    extract($row);//creates variables for each column
                    echo "<tr>
                            <td>$user_id</td>
                            <td>$names</td>
                            <td>$email</td>
                        </tr>";

                    //employees
                    //combined sales and products
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>

