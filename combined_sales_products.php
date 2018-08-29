<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Combined Sale and Product Tables</title>
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
<div class="container">
    <h2>Combined Sale & Product Data</h2>
    <input type="text" id="input" class="form-control" placeholder="Search..">
    <br>
    <div class="col-sm-12">
        <table class="table table-dark" id="comb">
            <tr>
                <th>Product_id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sale_id</th>
                <th>Product_id</th>
                <th>Sale_date</th>
                <th>Sale_quantity</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "school");

            //prepare the sql query

            $sql = "select products.*, sales.* from products INNER JOIN sales on products.product_id = sales.product_id
            ORDER BY sales.sale_date";

            //execute the sql query

            $results = mysqli_query($conn, $sql);

            //process results (assoc-associate array)

            while ($row = mysqli_fetch_assoc($results))
            {
                extract($row);//creates variables for each column
                echo "<tr>
                            <td>$product_id</td>
                            <td>$name</td>
                            <td>$price</td>
                            <td>$quantity</td>
                            <td>$sale_id</td>
                            <td>$product_id</td>
                            <td>$sale_date</td>
                            <td>$sale_quantity</td>
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
            $("#comb tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            })
        })
    } );
</script>
</body>
</html>

