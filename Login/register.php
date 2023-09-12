<?php
// Database connection
$servername = "localhost";
$email = "may.cantimbuhan@cvsu.edu.ph";
$password = "May123";
$dbname = "register";

$conn = new mysqli('localhost','may.cantimbuhan@cvus.edu.ph','May123','register');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Register user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Insert user data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('May', 'may.cantimbuhan@cvsu.edu.ph', 'May123')";
    
    if ($name == "May" && $email == "may.cantimbuhan@cvsu.edu.ph" && $password == "May123") {
        echo "Registration successful!";
    } else {
        echo "Invalid email or password!";
    }
}

$conn->close();
?>
