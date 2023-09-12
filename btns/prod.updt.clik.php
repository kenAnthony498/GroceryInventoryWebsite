<?php
    $con=mysqli_connect("localhost","root","","grocerydb");
    if(!$con)
    {
    die("cannot connect to server");
    }

    if(isset($_POST["btn"]))
    {
        $item_stock=$_POST['iqty'];
        $dateOrder=$_POST['idateOrder'];
        $dateExpr=$_POST['idateExpr'];
        $Location=$_POST['ilocation'];
        $id=$_GET['id'];

        $q= "update inventory_tb set in_stock='$item_stock', 
        date_ordered='$dateOrder', expiration_date='$dateExpr', storage_location='$Location' where id = '$id'";
        $query=mysqli_query($con,$q);
        header('location: http://localhost/GroceryWebStore/index.php');
    } 
    else if(isset($_GET['id'])) 
    {
        $q = "SELECT * FROM inventory_tb WHERE Id='".$_GET['id']."'";
        $query=mysqli_query($con,$q);
        $res= mysqli_fetch_array($query);
    }
?>
