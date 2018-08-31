
<?php
require ("mydb_conn.php");
//check if the data is there
if (isset($_GET["id"]))//checking the existence of a record
{
    extract($_GET);//created variable majina and email
//    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "select * from users where user_id = $id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    extract($row);//display details in the form
}

if (isset($_POST["update"]))//checks if the user has clicked the update button
{
    extract($_POST);
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "UPDATE `users` SET `names`='$majina',`email`='$email',`password`='$hash' where user_id = $id";

    mysqli_query($conn, $sql);

    header("location:table.php");
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
            <h2 class="text-center">Update User <?=$names?></h2>
<!--            echo name-->
            <form action="update.php" method="post">

                <input type="hidden" name="id" value="<?=$user_id?>">

                <div class="form-group">
                    <input type="text" value="<?=$names?>" class="form-control" placeholder="Names" name="majina" required>
                </div>

                <div class="form-group">
                    <input type="email" value="<?=$email?>" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <input type="password" value="" class="form-control" placeholder="Password" name="password" required minlength="8">
                </div>

                <button type="submit" name="update" class="btn btn-successs btn-block">Update User</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>