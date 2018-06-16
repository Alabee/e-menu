<?php
//Connection information.
$host="localhost";//host name
$username="root"; //database username
$word="";//database word
$db_name="emenu_db";//database name
$tbl_name="orders"; //table name

$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
//Save status
$saved = false;

//Save foods order/information.
if(isset($_POST['foods'])){

    $foods = $_POST;
    var_dump($foods);
    $foods_text = "";
    $beverages = "";
    foreach($foods['foods'] as $key=>$food){
        $foods_text = $foods_text."<br/>".$food;
    }
    foreach($foods['beverages'] as $key=>$beverage){
        $beverages = $beverages."<br/>".$beverage;
    }
    $query = "INSERT INTO `orders`(`Id`,Foods,Beverages) VALUES (NULL,'{$foods_text}','{$beverages}')";
    $save = mysqli_query($con,$query);
    $saved = $save==1;
}


//if(mysqli_error($con)){
//    echo mysqli_error($con);
//}

if($saved){
    header("location: index.php?message=Order is being processed.");
}else{
    header("location: index.php?message=There was an error placing your order.");
}



