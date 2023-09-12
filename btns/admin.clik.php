<?php
    $con=mysqli_connect("localhost","root","","grocerydb");
    if(!$con)
    {
    die("cannot connect to server");
    }
    if(isset($_POST["btn"])) {
        $admin_first_name=$_POST['afname'];
        $admin_initial=$_POST['amname'];
        $admin_last_name=$_POST['alname'];
        $age=$_POST['adage'];
        $gender=$_POST['adgender'];
        $Contact=$_POST['adcontact'];
        $address=$_POST['adhomead'];
        $email=$_POST['ademail'];
        $password=$_POST['adpassword'];
        $position=$_POST['adposition'];
        $salary=$_POST['adsalary'];
    

        $q = "insert into admins_tb(admin_first_name, admin_initial, admin_last_name, age, gender, contact_no, address, email, password, position, salary)
        values('$admin_first_name', '$admin_initial', '$admin_last_name', '$age', '$gender', '$Contact', '$address', '$email','$password', '$position', '$salary')";

        mysqli_query($con,$q);
        header("location: http://localhost/GroceryWebStore/index.php");
    }
?>