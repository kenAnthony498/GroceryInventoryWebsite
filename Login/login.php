<?php

$conn = new mysqli('localhost','root','','grocerydb');
$q = "SELECT `email`, `password` FROM admins_tb";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Retrieve user data from the database
    $sql = "SELECT * FROM admins_tb WHERE email ='' AND password =''";
    $query=mysqli_query($conn,$sql);
    while($qq=mysqli_fetch_array($query))
    {
        $EmailAdd = $qq['email'];
        $Epassword = $qq['password'];
        if ($email === $EmailAdd && $password === $Epassword) {
            
        }
    }
}

$conn->close();
?>
