<?php
    $con=mysqli_connect("localhost","root","","grocerydb");
    if(!$con)
    {
    die("cannot connect to server");
    }
    $pn=$_POST['prodToDelete'];
    if(isset ($_POST['deladbtn'])){

        $q = "DELETE FROM admins_tb WHERE admin_id = $pn";

        $result = mysqli_query($con,$q);

        header('location: http://localhost/GroceryWebStore/index.php');
    } elseif (isset ($_POST['cancelbtn'])){
        header('location: http://localhost/GroceryWebStore/index.php');
    }
?>