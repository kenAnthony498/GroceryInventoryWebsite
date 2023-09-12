<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php");
    exit;
}
$conn = new mysqli('localhost', 'root', '', 'grocerydb');

$username = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM admins_tb WHERE email = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if(isset($_POST['li'])){
    if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid password!";
    }
    } else {
        echo "Invalid username!";
    }
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Login Form</title>
    <?php require 'CSS/misc_BG.php';?>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    .login-container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-container label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .login-container input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
    }

    .login-container input[type="submit"]:hover {
        background-color: #45a049;
    }

    .login-container .error-message {
        color: #ff0000;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
    <div class="login-container">
        <form method="post">
        <div>
            <label>Email</label>
            <input type="text" name="email">
            <span></span>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
            <span></span>
        </div>
        <div>
            <input type="submit" name="li" value="Login">
        </div>
    </form>
    </div>
    
</body>
</html>
