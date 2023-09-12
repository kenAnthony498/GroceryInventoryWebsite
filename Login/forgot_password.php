<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-group {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f2f2f2;
        }
        
        .form-group h2 {
            text-align: center;
        }
        
        .form-group label,
        .form-group input[type="Email"],
        .form-group input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .form-group p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="form-group">
    <h2>Forgot Password</h2>
    <form action="reset_password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
