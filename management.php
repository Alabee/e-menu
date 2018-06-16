<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            background: none !important;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <h1 class="navbar-brand" href="#">e-menu (Management)</h1>
    </div>
</nav>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <?php
            //Connection information.
            $host="localhost";//host name
            $username="root"; //database username
            $word="";//database word
            $db_name="emenu_db";//database name
            $tbl_name="orders"; //table name

            $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string

            $query  = mysqli_query($con,"SELECT * FROM orders");
            ?>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Order ID</th>
                    <th>Table</th>
                    <th>Foods</th>
                    <th>Beverages</th>
                    <th>Date</th>
                </thead>
               <tbody>
                   <?php
                   while($order = mysqli_fetch_array($query)){
                       ?>
                       <tr>
                           <td><?php echo $order['Id']; ?></td>
                           <td><?php echo $order['TableNumber']; ?></td>
                           <td><?php echo $order['Foods']; ?></td>
                           <td><?php echo $order['Beverages']; ?></td>
                           <td><?php echo $order['OrderDate']; ?></td>
                       </tr>
                       <?php
                   }
                   ?>
               </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(function(){
        setInterval(function () {
            location.reload();
        },2000)
    });
</script>
</body>
</html>













