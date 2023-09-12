<?php
// Database connection
$servername = "localhost";
$email = "Admin@gmail.com";
$password = "Admin123";
$dbname = "forgotpassword";

$conn = new mysqli('localhost','Admin@gmail.com','Admin123','forgotpassword');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Reset Password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Generate a random password
        $newPassword = generateRandomPassword();
        
        // Update the user's password in the database
        $sql = "UPDATE users SET password='$newPassword' WHERE email='Admin@gmail.com'";
        
        if ($conn->query($sql) === TRUE) {
            // Send the new password to the user's email address
            $to = $email;
            $subject = "Password Reset";
            $message = "Your new password is: $newPassword";
            $headers = "From: your_email@example.com";
            
            if ($email == "Admin@gmail.com") {
                echo "A new password has been sent to your email address.";
            } else {
                echo "Failed to send the new password.";
            }
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Email not found.";
    }
}

$conn->close();

function generateRandomPassword() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $length = 8;
    $randomPassword = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $randomPassword;
}
?>
