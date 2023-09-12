<?php
    $con=mysqli_connect("localhost","root","","grocerydb");
    if(!$con)
    {
    die("cannot connect to server");
    }
    if(isset($_POST["btn"])) {
        
        $item_name=$_POST['iname'];
        $item_stock=$_POST['iqty'];
        $dateOrder=$_POST['idateOrder'];
        $dateExpr=$_POST['idateExpr'];
        $Location=$_POST['ilocation'];
    

        $q = "insert into inventory_tb(product_name, in_stock, date_ordered, expiration_date, storage_location)
        values('$item_name', '$item_stock', '$dateOrder', '$dateExpr', '$Location')";

        mysqli_query($con,$q);
        header("location: http://localhost/GroceryWebStore/index.php");
    }
?>