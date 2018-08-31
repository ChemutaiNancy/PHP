
<?php
require ("mydb_conn.php");
//check if the data is there
if (isset($_POST["email"]))
{
    extract($_POST);//created variable majina and email
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users`(`names`, `email`, `password`, `status`) VALUES ('$majina','$email','$hash',1)";

    mysqli_query($conn, $sql);
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
    include "nav.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h2 class="text-center">Add user</h2>
            <form action="save.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Names" name="majina" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required minlength="8">
                </div>

                <button type="submit" class="btn btn-successs btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>